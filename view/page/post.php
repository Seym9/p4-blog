<?php ob_start(); ?>
    <div class="container">
        <h3><?= $displayPost['post_title'] ?></h3>
        <p><?= $displayPost['date_fr'] ?></p>
        <p><?= $displayPost['content'] ?></p>
    </div>
<div class="container">
    <form action="index.php?p=sendcomment&id_post=<?= $displayPost['id']?>" method="post" id="form-comment">
        <div>
            <label for="author">Nom ou pseudo</label>
            <input name="author" type="text" id="author" placeholder="Votre nom">
        </div>
        <div>
            <label for="comment">Message</label>
            <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Votre message"></textarea>
        </div>
        <div>
            <input type="submit" value="Send" class="btn btn-primary">
        </div>
    </form>
</div>
<?php foreach ($displayComments as $commentList) : ?>

<?php if ($displayPost['id'] === $commentList['id_post']) : ?>
    <div class="container">
        <a href="index.php?p=report&report_com=<?= $commentList['id'] ?>">report</a>
        <p><?= $commentList['date_fr'] ?></p>
        <p><?= $commentList['author'] ?></p>
        <p><?= $commentList['message'] ?></p>
    </div>
    <?php endif ?>
<?php endforeach; ?>
<?php
$content = ob_get_clean();
require "view/layout.php";
?>
