<?php ob_start(); ?>

    <div class="container">
        <h3><?= $displayPost['post_title'] ?></h3>
        <p><?= $displayPost['date_fr'] ?></p>
        <p><?= $displayPost['content'] ?></p>
    </div>

<?php
$content = ob_get_clean();
require "view/layout.php";
?>
