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

<section class="text-center" id="home-welcome">
    <div class="header-home">
        <h1 class="jumbotron-heading mobile-home-content">Billet simple pour l'Alaska</h1>
        <p class="mobile-home-content">Par <span>Jean Forteroche</span></p>
        <p class="lead mobile-home-content">Installez vous et plonger dans son univers </p>

        <div class="btn-group">
            <a href="index.php?p=post-list" type="button" class="btn my-2 mx-2 header-btn btn-sm" >Voir tout les chapitres</a>
            <a href="#" type="button" class="btn my-2 first header-btn btn-sm" >Apprenez en plus sur l'auteur</a>
        </div>
    </div>


<section class="container jumbotron box-2 last note-home" id="note-home">
        <h3 class="jumbotron-heading" >Note de l'auteur</h3>
        <p class="lead text-center py-5 px-5 home-text-content">Oh, so they have Internet on computers now! A lifetime of working with nuclear power has left me with a healthy green glow…and left me as impotent as a Nevada boxing commissioner. Hi. I'm Troy McClure. You may remember me from such self-help tapes as "Smoke Yourself Thin" and "Get Some Confidence, Stupid!"
        </p>
</section>

<div class="container jumbotron note-home" id="home-post-container">
    <div class="container-fluid  text-center note-home">
        <h3 class="text-center">Dernier article</h3>

            <div class="card jumbotron last-article-home">
                <h2 class="card-text"><?= $post->gettitle() ?></h2>
                <p class="card-text"><?= strip_tags(substr($post->getcontent(), 0 , 500)) . "...";?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="index.php?p=post&id=<?= $post->getId()?>" type="button" class="btn btn-sm">Voir l'article</a>
                    </div>
                    <p class="black-home">Mis en ligne le : <?=$post->getDate('d-m-Y')?></p>
                </div>
            </div>

    </div>
</div>

</section>
    <section class="container jumbotron py-5 px-5 note-home">
        <h3 class="jumbotron-heading" id="about-home">A propos de l'auteur</h3>
        <p class="lead text-center py-5 home-text-content">Oh, so they have Internet on computers now! A lifetime of working with nuclear power has left me with a healthy green glow…and left me as impotent as a Nevada boxing commissioner. Hi. I'm Troy McClure. You may remember me from such self-help tapes as "Smoke Yourself Thin" and "Get Some Confidence, Stupid!" </p>
</section>
