<?php ob_start(); ?>

    <div class="container">
        <h3><?= $displayPost['post_title'] ?></h3>
        <p><?= $displayPost['date_fr'] ?></p>
        <p><?= $displayPost['content'] ?></p>
    </div>
<?php foreach ($displayComments as $commentList) : ?>
    <div class="container">
        <p><?= $commentList['date_fr'] ?></p>
        <p><?= $commentList['author'] ?></p>
        <p><?= $commentList['message'] ?></p>

    </div>
<?php endforeach; ?>
<?php
$content = ob_get_clean();
require "view/layout.php";
?>
