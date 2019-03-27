<?php ob_start(); ?>
<div class="container">
    <a href="index.php?p=post-creation">Crée un post</a>
    <?php foreach ($displayList as $posts): ?>
    <div class="col-md-6" id="post-dashboard-container">
        <div id="title-date-dashboard">
            <h2><?= $posts['post_title'] ?></h2>
            <p><?= $posts['date_fr'] ?></p>
        </div>
        <p><?= substr($posts['content'], 0 , 200) . "..."; ?></p>
        <div id="link-post-dashboard" class="link-dash">
            <a href="index.php?p=post-admin&id=<?= $posts["id"]?>">Voir</a>
            <a href="index.php?p=post-edit&id=<?= $posts["id"]?>">Edit</a>
            <a href="index.php?p=post-delete&id=<?= $posts["id"]?>" class="delete-post">Delete</a>
        </div>
    </div>
    <?php endforeach; ?>
    <div class="col-md-4" id="comment-dashboard-container">
        <div>
            test
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require "view/layout.php";
?>
