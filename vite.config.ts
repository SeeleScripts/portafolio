// vite.config.js
import { defineConfig, type ConfigEnv, type UserConfig } from 'vite';
import { fileURLToPath } from 'node:url';
import { cpSync, mkdirSync, existsSync } from 'node:fs';
import { resolve } from 'node:path';
import usePHP from 'vite-plugin-php';
import { viteStaticCopy } from 'vite-plugin-static-copy';
import { ViteEjsPlugin } from 'vite-plugin-ejs';
import { imagetools } from 'vite-imagetools';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig((configEnv: ConfigEnv): UserConfig => {
	const { command } = configEnv;
	const publicBasePath = '/'; // Change if deploying under a nested public path. Needs to end with a /. See https://vitejs.dev/guide/build.html#public-base-path

	const base = command === 'serve' ? '/' : publicBasePath;
	const BASE = base.substring(0, base.length - 1);

	return {
		base,
		plugins: [
			// Copies translations/ into .php-tmp/ on dev server start and on file changes.
			// viteStaticCopy only writes to disk during build; this plugin fills the gap for dev.
			{
				name: 'php-tmp-sync-translations',
				apply: 'serve',
				buildStart() {
					const src = resolve(__dirname, 'translations');
					const dest = resolve(__dirname, '.php-tmp', 'translations');
					if (existsSync(src)) {
						mkdirSync(dest, { recursive: true });
						cpSync(src, dest, { recursive: true, force: true });
					}
				},
				handleHotUpdate({ file, server }) {
					if (file.includes(`translations`)) {
						const src = resolve(__dirname, 'translations');
						const dest = resolve(
							__dirname,
							'.php-tmp',
							'translations',
						);
						mkdirSync(dest, { recursive: true });
						cpSync(src, dest, { recursive: true, force: true });
					}
				},
			},
			imagetools(),
			usePHP({
				entry: [
					'index.php',
					'configs/env.php',
					'partials/**/*.php',
					'utils/**/*.php',
					'views/**/*.php',
				],
				rewriteUrl(requestUrl) {
					const filePath = fileURLToPath(
						new URL('.' + requestUrl.pathname, import.meta.url),
					);
					const publicFilePath = fileURLToPath(
						new URL(
							'./public' + requestUrl.pathname,
							import.meta.url,
						),
					);

					if (
						!requestUrl.pathname.includes('.php') &&
						(existsSync(filePath) || existsSync(publicFilePath))
					) {
						return undefined;
					}

					requestUrl.pathname = 'index.php';

					return requestUrl;
				},
			}),
			ViteEjsPlugin({
				BASE,
			}),
			viteStaticCopy({
				targets: [
					{ src: 'public', dest: '' },
					{ src: 'system', dest: '' },
					{ src: 'configs', dest: '', overwrite: false },
					{ src: 'vendor', dest: '' },
					{ src: 'translations', dest: '' },
				],
				silent: command === 'serve',
			}),
			tailwindcss(),
		],
		define: {
			'BASE': JSON.stringify(BASE),
			'import.meta.env.BASE': JSON.stringify(BASE),
		},
		resolve: {
			alias: {
				'~/': fileURLToPath(new URL('./src/', import.meta.url)),
			},
		},
		publicDir: command === 'build' ? 'raw' : 'public',
		css: {
			devSourcemap: true,
			preprocessorOptions: {
				scss: {
					api: 'modern-compiler',
				},
			},
		},
		server: {
			port: 3000,
			watch: {
				ignored: ['**/.php-tmp/logs/**'], // Ignore the tmp folder
			},
		},
		build: {
			assetsDir: 'public',
			emptyOutDir: true,
		},
	};
});
