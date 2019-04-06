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

    <h1 class="jumbotron-heading">Billet simple pour l'Alaska</h1>
    <p>Par <span>Jean Forteroche</span></p>
    <p class="lead text-muted">Installez vous et plonger dans son univers </p>

    <div class="btn-group">
        <a href="index.php?p=post-list" type="button" class="btn btn-primary my-2" >Voir tout les chapitres</a>
    </div>
    <div class="btn-group">
        <a href="#" type="button" class="btn btn-primary my-2 first" >Apprenez en plus sur l'auteur</a>
    </div>

<section class="container jumbotron box-2 last" id="note-home">
        <h3 class="jumbotron-heading" >Note de l'auteur</h3>
        <p class="lead text-muted text-center py-5">Oh, so they have Internet on computers now! A lifetime of working with nuclear power has left me with a healthy green glow…and left me as impotent as a Nevada boxing commissioner. Hi. I'm Troy McClure. You may remember me from such self-help tapes as "Smoke Yourself Thin" and "Get Some Confidence, Stupid!"
        </p>
</section>

<div class="container jumbotron" id="home-post-container">
    <div class="container-fluid jumbotron">
        <h3 class="text-center">Dernier article</h3>

            <div class="card  jumbotron">
                <h3 class="card-text"><?= $post->gettitle() ?></h3>
                <p class="card-text"><?= strip_tags(substr($post->getcontent(), 0 , 500)) . "...";?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="index.php?p=post&id=<?= $post->getid()?>" type="button" class="btn btn-sm btn-outline-secondary">Voir l'article</a>
                    </div>
                    <p class="text-muted"><?=$post->getDate('d-m-Y')?></p>
                </div>
            </div>

    </div>
</div>

</section>
    <section class="container jumbotron">
        <h3 class="jumbotron-heading" id="about-home">A propos de l'auteur</h3>
        <p class="lead text-muted text-center py-5">Oh, so they have Internet on computers now! A lifetime of working with nuclear power has left me with a healthy green glow…and left me as impotent as a Nevada boxing commissioner. Hi. I'm Troy McClure. You may remember me from such self-help tapes as "Smoke Yourself Thin" and "Get Some Confidence, Stupid!" </p>
</section>
