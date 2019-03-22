<?php ob_start(); ?>
<a href="index.php?p=post-creation">Crée un post</a>

<?php foreach ($displayList as $posts): ?>
<div class="col-md-6" style="border: 2px solid black">
        <h2><?= $posts['post_title'] ?></h2>
        <p><?= substr($posts['content'], 0 , 200) . "..."; ?></p>
        <a href="index.php?p=post&id=<?= $posts["id"]?>">Voir</a>
        <p><?= $posts['date_fr'] ?></p>
        <a href="index.php?p=post-edit&id=<?= $posts["id"]?>">Edit</a>
</div>
<?php endforeach; ?>
<?php
$content = ob_get_clean();
require "view/layout.php";
?>
