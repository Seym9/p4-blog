<?php ob_start(); ?>

    <div class="container">

    </div>

<?php
$content = ob_get_clean();
require "view/layout.php";
?>
