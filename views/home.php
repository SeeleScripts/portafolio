<?php
require 'system/main.php';
$layout = new HTML(title: 'Carlos Hernandez - Portfolio', active: $active);
?>

<input id="magic_token" type="hidden" value="<?= $ajax_nonce ?>">

