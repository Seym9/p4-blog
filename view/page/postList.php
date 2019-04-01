<?php ob_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">
                        h3. Lorem ipsum dolor sit amet.
                    </h3>
                    <p class="text-center lead">
uu
                    </p>
                </div>
            </div>
            <?php foreach ($displayList as $postsList) :?>
            <div class="row">
                <div class="card text-center col-md-12 jumbotron">
                    <h3>
                        <?= ucfirst($postsList['post_title']) ?>
                    </h3>
                    <p class="text-center mt-5">
                        <?= strip_tags(substr($postsList['content'],0,350)) . "..." ?>
                    </p>
                    <a href="index.php?p=post&id=<?= $postsList["id"]?>" class="btn btn-primary">Lire le chapitre</a>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require "view/layout.php";
?>
