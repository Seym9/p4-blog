<?php
//var_dump($post);
if (isset($_GET['id'])){
    $title = $post->getTitle();
    $postContent = $post->getContent();
    $action = 'index.php?p=post-edited&id=' . $post->getId();
}else{
    $title = "";
    $postContent = "";
    $action = "index.php?p=post-send";
}
    ?>
    <div class="container post-creation-form card py-5">
        <form action="<?= $action ?>" method="post" id="form-post">
            <div class=" text-center py-5">
                <label for="title-edit">Titre de l'article</label><br>
                <input type="text" name="title" id="title-edit" value="<?= $title ?>" required>
            </div>
            <div class="text-center">
                <label class="" for="post-edit">Contenu de l'article</label><br>
                <textarea name="post-edit" id="post-edit" cols="30" rows="10"><?= $postContent ?></textarea>
            </div>
            <div>
                <input type="submit" value="Envoyer" class="btn btn-primary btn-block mt-3">
            </div>
        </form>
    </div>