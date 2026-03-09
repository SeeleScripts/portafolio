<?php
require 'system/main.php';
$layout = new HTML(
	'Carlos Hernandez - Portfolio',
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

<input id="magic_token" type="hidden" value="<?= $ajax_nonce ?>">


<!-- BEGIN: MainContent -->
<main class="max-w-6xl mx-auto px-6 md:px-12 py-12 space-y-16">
    <hr class="border-t border-gray-200 dark:border-gray-800">
    <?php include 'partials/components/about.php'; ?>
    
    <?php include 'partials/components/experience.php'; ?>
    <?php include 'partials/components/projects.php'; ?>
    
   
</main>
<!-- END: MainContent -->
