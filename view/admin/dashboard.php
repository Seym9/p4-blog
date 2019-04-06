<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a href="index.php?p=dashboard-comments" class="btn btn-primary">com</a>
                </li>
            </ul>
        </div>
    </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <?php foreach ($displayList as $posts): ?>
                <div class="col-md-4 card">
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
                        <?= $nb ?>
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
                    <a href="index.php?p=post-edit&id=<?= $posts->getId()?>" class="btn btn-primary btn-sm mx-2">Modifier</a>
                    <a href="index.php?p=post-delete&id=<?= $posts->getId()?>" class="delete-post btn btn-primary btn-sm mx-2">Supprimer</a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>