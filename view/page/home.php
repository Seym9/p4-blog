<?php ob_start(); ?>

    <div class="testbl"></div>
    <div class="container">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Bienvenue sur le blog de <span>Jean Forteroche</span></h1>
            <p class="lead text-muted">Installez vous et plonger dans son univers </p>
            <p>
                <a href="#" class="btn btn-primary my-2">Voir tout ses articles</a>
            </p>
        </div>
    </section>

    <div class="album" id="home-post-container"> <!-- "bg-light" class fond blanc -->
        <div class="container">
            <div class="row">
                <?php foreach ($displayList as $postList) : ?>
                <div class="col-lg-4">
                    <div class="card mb-4 shadow-sm">
                        <h3 class="card-text"><?= $postList['post_title'] ?></h3>
                        <p class="card-text"><?=substr($postList['content'], 0 , 50) . "...";?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="index.php?p=post&id=<?= $postList["id"]?>" type="button" class="btn btn-sm btn-outline-secondary">Voir l'article</a>
                            </div>
                            <small class="text-muted"><?= $postList['date_fr']?></small>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>

    </div>
</div>

<?php
$content = ob_get_clean();
require "view/layout.php";
?>