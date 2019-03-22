<?php ob_start();
if (isset($_GET['id'])){
    $title = $displayPost['post_title'];
    $postContent = $displayPost['content'];
}else{
    $title = "";
    $postContent = "";
}
?>

    <div class="container">

        <form action="index.php?p=post-send" method="post">
            <div>
                <label for="title-edit">Titre du post</label>
                <input type="text" name="title" id="title-edit" value="<?= $title ?>">
            </div>
            <div>
                <label for="post-edit">Contenu du post</label>
                <textarea name="post" id="post-edit" cols="30" rows="10"><?= $postContent ?></textarea>
            </div>
            <div>
                <input type="submit" value="Send" class="btn btn-primary">
            </div>
        </form>
    </div>

<?php
$content = ob_get_clean();
require "view/layout.php";
?>
