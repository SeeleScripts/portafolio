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
	<section data-aos="<?= VITE_SITE_ANIMATION ?>" class="space-y-8">
		<a href="/<?= htmlspecialchars(
  	$lang ?? 'en',
  ) ?>/" class="text-primary hover:underline mb-10">
			&larr; <?= $t('work.back_to_home') ?>
		</a>
		<h2 class="text-4xl text-primary font-bold mt-10">
			Project: <?= htmlspecialchars($project_data['title']) ?>
		</h2>		
		<?php if (!empty($project_data['images']['main'])): ?>
		<img src="<?= htmlspecialchars(
  	$project_data['images']['main'],
  ) ?>" alt="<?= htmlspecialchars($project_data['title']) ?>" class="">
		<?php endif; ?>
	</section>
	<?php
 $content_file =
 	__DIR__ . '/../partials/recent_works/' . $project_data['slug'] . '.php';

 if (file_exists($content_file)) {
 	require $content_file;
 } else {
 	echo '<p>Content coming soon.</p>';
 }
 ?>

 	<section data-aos="<?= VITE_SITE_ANIMATION ?>" class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
		<?php if (!empty($project_data['images']['gallery1'])): ?>
		<img src="<?= htmlspecialchars(
  	$project_data['images']['gallery1'],
  ) ?>" alt="<?= htmlspecialchars(
	$project_data['title'],
) ?> Main" class="w-full h-auto rounded-lg shadow-md">
		<?php endif; ?>
		<?php if (!empty($project_data['images']['gallery2'])): ?>
		<img src="<?= htmlspecialchars(
  	$project_data['images']['gallery2'],
  ) ?>" alt="<?= htmlspecialchars(
	$project_data['title'],
) ?> Products" class="w-full h-auto rounded-lg shadow-md">
		<?php endif; ?>
	</section>
</main>
<!-- END: MainContent -->