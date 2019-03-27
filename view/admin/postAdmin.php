<?php ob_start(); ?>
<div class="container">
    <h3><?= $displayPost['post_title'] ?></h3>
    <p><?= $displayPost['date_fr'] ?></p>
    <p><?= $displayPost['content'] ?></p>
    <a href="index.php?p=post-edit&id=<?= $displayPost["id"]?>">Edit</a>
    <a href="index.php?p=post-delete&id=<?= $displayPost["id"]?>" class="delete-post">Delete</a>
</div>

<h2>commentaires</h2>
<?php foreach ($displayComments as $commentList) : ?>
    <?php if ($displayPost['id'] === $commentList['id_post']) : ?>
        <div class="container">
            <p><?= $commentList['date_fr'] ?></p>
            <p><?= $commentList['author'] ?></p>
            <p><?= $commentList['message'] ?></p>
            <a href="index.php?p=delete-com&id=<?= $commentList['id_post']?>&id_com=<?= $commentList['id']?> " class="delete-post">delete</a>
        </div>
    <?php endif ?>
<?php endforeach; ?>
<?php
$content = ob_get_clean();
require "view/layout.php";
?>
