/**
 * Language switcher module
 * Reads the current locale from [data-current-lang] on the .lang-switcher button,
 * navigates to /{otherLang}/ on click, and sets a backup cookie client-side.
 */

const COOKIE_NAME = 'lang_pref';
const COOKIE_DAYS = 365;

function setCookie(name, value, days) {
	const expires = new Date(Date.now() + days * 864e5).toUTCString();
	document.cookie = `${name}=${value}; expires=${expires}; path=/; SameSite=Lax`;
}

function switchLanguage() {
	const btn = document.querySelector('.lang-switcher');
	if (!btn) return;

	btn.addEventListener('click', () => {
		const currentLang = btn.dataset.currentLang || 'en';
		const otherLang =
			btn.dataset.otherLang || (currentLang === 'en' ? 'es' : 'en');

		// Set cookie as redundant client-side backup
		setCookie(COOKIE_NAME, otherLang, COOKIE_DAYS);

		// Replace the locale segment in the current path
		// e.g. /en/  → /es/  or  /es/ → /en/
		const currentPath = window.location.pathname;
		const newPath = currentPath.replace(
			/^\/(en|es)(\/|$)/,
			`/${otherLang}/`,
		);

		// If no locale segment found, just navigate to /{otherLang}/
		const target = newPath !== currentPath ? newPath : `/${otherLang}/`;
		window.location.href =
			target + window.location.search + window.location.hash;
	});
}

export default switchLanguage;
