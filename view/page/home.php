<?php ob_start(); ?>
    <main role="main" class="site-container ">
        <div class="container site-container">
            <div class="container jumbotron site-container" >
    <div class="snow">
        <div class="snow__layer"><div class="snow__fall"></div></div>
        <div class="snow__layer"><div class="snow__fall"></div></div>
        <div class="snow__layer">
            <div class="snow__fall"></div>
            <div class="snow__fall"></div>
            <div class="snow__fall"></div>
        </div>
        <div class="snow__layer"><div class="snow__fall"></div></div>
    </div>

    <div class="container">
        <section class="jumbotron text-center" id="home-welcome">
            <div class="container">
                <h1 class="jumbotron-heading">Billet simple pour l'Alaska</h1>
                <p>Par <span>Jean Forteroche</span></p>
                <p class="lead text-muted">Installez vous et plonger dans son univers </p>

                <div class="btn-group">
                    <a href="#" type="button" class="btn btn-primary my-2" >Voir tout ses articles</a>
                </div>
            </div>
        </section>
        <section class="jumbotron">
            <div class="container">
                <h3 class="jumbotron-heading" id="about-home">A propos de l'auteur</h3>
                <p class="lead text-muted text-center py-5">Oh, so they have Internet on computers now! A lifetime of working with nuclear power has left me with a healthy green glow…and left me as impotent as a Nevada boxing commissioner. Hi. I'm Troy McClure. You may remember me from such self-help tapes as "Smoke Yourself Thin" and "Get Some Confidence, Stupid!" </p>
            </div>
        </section>

    <div class="album" >
        <div class="container jumbotron">
            <div class="row">
                <div class="container jumbotron" id="home-post-container">
                <?php foreach ($displayList as $postList) : ?>

                        <div class="card mb-4 jumbotron col-lg-4">
                            <h3 class="card-text"><?= $postList['post_title'] ?></h3>
                            <p class="card-text"><?= strip_tags(substr($postList['content'], 0 , 50)) . "...";?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="index.php?p=post&id=<?= $postList["id"]?>" type="button" class="btn btn-sm btn-outline-secondary">Voir l'article</a>
                                    </div>
                                    <p class="text-muted"><?= $postList['date_fr']?></p>
                                </div>
                        </div>

                <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </main>
<?php
$content = ob_get_clean();
require "view/layout.php";
?>