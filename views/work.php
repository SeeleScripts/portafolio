<?php
require 'system/main.php';
$layout = new HTML(
	'Project Details - ' . htmlspecialchars($slug),
	$active,
	$lang ?? 'en',
	$translator ?? null,
);
// Create $t helper for use throughout the view
$_t = $translator ?? null;
$t = $_t
	? function (string $key) use ($_t) {
		return $_t->trans($key);
	}
	: function (string $key) {
		return $key;
	};
?>


<!-- BEGIN: MainContent -->
<main class="max-w-6xl mx-auto px-6 md:px-12 py-12 space-y-16 mt-20">
	<section class="space-y-8">
		<a href="/<?= htmlspecialchars(
  	$lang,
  ) ?>/" class="text-primary hover:underline mb-10">
			&larr; <?= $t('work.back_to_home') ?>
		</a>
		<h2 class="text-4xl text-primary font-bold mt-10">
			Project: The Screaming Chef
		</h2>		
		<img src="%BASE%/img/posts/thescreamingchef/thescreamingchef.webp" alt="The Screaming Chef" class="">
	</section>
	<section class="mx-auto pb-16">

		<!-- Project Header -->
		<header class="mb-12">		
			<p class="text-gray-600 dark:text-gray-300 mb-4">
				Custom WordPress website built from scratch for a Canadian ready-meal brand,
				featuring a dynamic product catalog and store locator integration.
			</p>

			<a href="https://thescreamingchef.ca/" target="_blank"
				class="inline-flex items-center text-primary font-medium hover:underline">
				Visit Website →
			</a>
		</header>

		<!-- Project Overview -->
		<div class="mb-12">
			<h2 class="text-2xl font-semibold mb-4 text-primary">Project Overview</h2>
			<p class="text-gray-600 dark:text-gray-300 leading-relaxed">
				The Screaming Chef is a Canadian food brand offering refrigerated ready-to-eat meals
				that use innovative steam-cooking packaging technology. The website serves as the
				brand’s primary marketing platform, showcasing its product lineup while helping
				customers locate nearby retailers carrying the products.
			</p>
		</div>

		<!-- Challenge -->
		<div class="mb-12">
			<h2 class="text-2xl font-semibold mb-4 text-primary">Challenge</h2>

			<ul class="space-y-2 text-gray-600 dark:text-gray-300 list-disc list-inside">
				<li>Present multiple products with structured information.</li>
				<li>Allow non-technical staff to easily manage content.</li>
				<li>Provide a store locator for nearby retailers.</li>
				<li>Implement pixel-perfect layouts from Adobe XD designs.</li>
				<li>Ensure performance and scalability.</li>
			</ul>
		</div>

		<!-- Solution -->
		<div class="mb-12">
			<h2 class="text-2xl font-semibold mb-4 text-primary">Solution</h2>

			<p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-4">
				I developed a fully custom WordPress theme from scratch, translating the design
				team's Adobe XD layouts into a responsive and pixel-perfect implementation.
				The CMS architecture was structured using Advanced Custom Fields Pro and
				custom post types to allow flexible and scalable content management.
			</p>

			<p class="text-gray-600 dark:text-gray-300 leading-relaxed">
				A Google Maps API integration powers the store locator feature, enabling users
				to easily find nearby retailers carrying the brand's products. Contact
				inquiries are handled using Ninja Forms, providing a reliable communication
				channel between customers and the brand.
			</p>
		</div>

		<!-- Key Features -->
		<div class="mb-12">
			<h2 class="text-2xl font-semibold mb-4 text-primary">Key Features</h2>

			<ul class="space-y-2 text-gray-600 dark:text-gray-300 list-disc list-inside">
				<li>Fully custom WordPress theme development</li>
				<li>Dynamic product management using Custom Post Types</li>
				<li>Flexible content management with ACF Pro</li>
				<li>Store locator powered by Google Maps API</li>
				<li>Pixel-perfect implementation from Adobe XD designs</li>
				<li>Contact forms using Ninja Forms</li>
			</ul>
		</div>

		<!-- Technologies -->
		<div class="mb-12">
			<h2 class="text-2xl font-semibold mb-4 text-primary">Technologies</h2>

			<div class="flex flex-wrap gap-3">
				<span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 rounded text-sm text-gray-600 dark:text-gray-300">WordPress</span>
				<span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 rounded text-sm text-gray-600 dark:text-gray-300">Custom Theme</span>
				<span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 rounded text-sm text-gray-600 dark:text-gray-300">ACF Pro</span>
				<span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 rounded text-sm text-gray-600 dark:text-gray-300">Custom Post Types</span>
				<span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 rounded text-sm text-gray-600 dark:text-gray-300">Ninja Forms</span>
				<span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 rounded text-sm text-gray-600 dark:text-gray-300">Google Maps API</span>
				<span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 rounded text-sm text-gray-600 dark:text-gray-300">Adobe XD</span>
			</div>
		</div>

		<!-- My Role -->
		<div>
			<h2 class="text-2xl font-semibold mb-4 text-primary">My Role</h2>

			<ul class="space-y-2 text-gray-600 dark:text-gray-300 list-disc list-inside">
				<li>Custom WordPress theme development</li>
				<li>Front-end and back-end implementation</li>
				<li>CMS architecture using ACF and custom post types</li>
				<li>Google Maps API integration</li>
				<li>Pixel-perfect development from design files</li>
			</ul>
		</div>

	</section>
	<section class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
		<img src="%BASE%/img/posts/thescreamingchef/thescreamingchef-main.webp" alt="The Screaming Chef Main" class="w-full h-auto rounded-lg shadow-md">
		<img src="%BASE%/img/posts/thescreamingchef/thescreamingchef-products.webp" alt="The Screaming Chef Products" class="w-full h-auto rounded-lg shadow-md">
	</section>
</main>
<!-- END: MainContent -->