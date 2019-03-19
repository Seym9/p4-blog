<?php ob_start(); ?>

<form action="" method="post">

    <div class="container">
        <label for="title-edit">Titre du post</label>
        <input type="text" name="title" id="title-edit">
    </div>
    <div class="container">
        <label for="post-edit">Contenu du post</label>
        <textarea name="post" id="post-edit" cols="30" rows="10"></textarea>
    </div>

</form>

<?php
$content = ob_get_clean();
require "view/layout.php";
?>
