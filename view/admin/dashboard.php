<div class="container">
    <div class="row header-dashboard py-5">
        <div class="col-md-12 text-center">
            <h1>
                Page administrateur
            </h1>
            <p>Partie article</p>
            <a href="index.php?p=dashboard-comments" class="btn btn-primary">Partie commentaire</a>
            <a href="index.php?p=post-creation" class="btn btn-primary">Crée un post</a>
        </div>
    </div>

    <div class="row content-dashboard">
        <div class="col-md-12">
            <div class="row">
                <?php foreach ($displayList as $posts): ?>

                <div class="col-xl-4 col-lg-6 col-md-12 card py-5 card-dashboard">
                    <h3 class="text-center">
                        Titre
                    </h3>
                    <p class="text-center">
                        <?= strip_tags($posts->getTitle()) ?>
                    </p>
                    <h3 class="text-center">
                        Nombre de commentaires
                    </h3>
                    <p class="text-center">
                        <?= $posts->getNbComments() ?>
                    </p>
                    <h3 class="text-center">
                        Date de création
                    </h3>
                    <p class="text-center">
                        <?= strip_tags($posts->getDate('d-m-Y')) ?>
                    </p>
                    <h3 class="text-center">
                        Option disponnible
                    </h3>
                    <div class="d-flex justify-content-center">
                    <a href="index.php?p=post-admin&id=<?= $posts->getId()?>" class="btn btn-primary btn-sm mx-2">Voir</a>
                    <a href="index.php?p=post-edit&id=<?= $posts->getId()?>" class="btn btn-warning btn-sm mx-2">Modifier</a>
                    <a href="index.php?p=post-delete&id=<?= $posts->getId()?>" class="delete-post btn btn-danger btn-sm mx-2">Supprimer</a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
</div>