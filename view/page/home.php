<?php ob_start(); ?>
<?php foreach ($displayList as $postList) : ?>
    <div class="container">

        <?php var_dump($postList); ?>
        <h2><?= $postList['post_title'] ?></h2>
        <p><?= substr($postList['content'], 0 , 200) . "..."; ?></p>
        <a href="index.php?p=post&id=<?= $postList["id"]?>">Voir</a>
        <p><?= $postList['date_fr'] ?></p>

    </div>
<?php endforeach;?>
<?php
$content = ob_get_clean();
require "view/layout.php";
?>

