<?php
require 'system/main.php';
$layout = new HTML(title: 'Carlos Hernandez - 404', active: 'home');
?>
<input id="magic_token" type="hidden" value="<?= $ajax_nonce ?>">

<section class="">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center">
            <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-ev-yellow dark:text-primary-500">
                404</h1>
            <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">Something's
                missing.</p>
            <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Sorry, we can't find that page. You'll
                find lots to explore on the home page. </p>
            <a href="/"
                class="inline-flex text-white bg-primary-600 hover:bg-primary-800  font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900 my-4">Back
                to Homepage</a>
        </div>
    </div>
</section>