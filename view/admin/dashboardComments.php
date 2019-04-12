<div class="container">
        <div class="row mb-5 header-dashboard py-5">
            <div class="col-md-12 text-center">
                <h1>
                    Page administrateur
                </h1>
                <p>Partie commentaire</p>
                <a href="index.php?p=dashboard" class="btn btn-primary">Partie article</a>
                <a href="index.php?p=post-creation" class="btn btn-primary">Crée un post</a>
            </div>
        </div>

        <div class="row content-dashboard">
            <div class="col-md-12">
                <div class="row">
                    <?php foreach ($displayListCom as $listComments): ?>
                            <div class="col-xl-4 col-lg-6 col-md-12 card my-5 py-5 card-dashboard">
                                <h3 class="text-center">
                                    Nom de l'autheur
                                </h3>
                                <p class="text-center">
                                    <?= htmlentities(strip_tags($listComments->getAuthor()) )?>
                                </p>
                                <h3 class="text-center">
                                    Message
                                </h3>
                                <p class="text-center">
                                    <?= htmlentities(strip_tags($listComments->getMessage())) ?>
                                </p>
                                <h3 class="text-center">
                                    Date du commentaire
                                </h3>
                                <p class="text-center">
                                    <?= htmlentities($listComments->getCommentDate('d-m-Y')) ?>
                                </p>
                                <h3 class="text-center">
                                    Nombre de signalement
                                </h3>
                                <p class="text-center">
                                    <?= htmlentities($listComments->getReport()) ?>
                                </p>
                                <h3 class="text-center">
                                    Option disponnible
                                </h3>
                                <div class="d-flex justify-content-center">
                                    <a href="index.php?p=delete-com&id=<?= $listComments->getIdPost()?>&id_com=<?= $listComments->getId()?> " class="delete-com btn btn-danger btn-xs">delete</a>
                                </div>
                            </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>