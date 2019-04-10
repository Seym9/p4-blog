<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-11 action-btn-postadmin">
                    <a href="index.php?p=post-edit&id=<?= $post->getId()?>" class="btn btn-warning">Modifier</a>
                    <a href="index.php?p=post-delete&id=<?= $post->getId()?>" class="delete-post btn btn-danger">Supprimer</a>
                    <div class="page-header text-center">
                        <h1>
                            <?= $post->getTitle() ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-8">
                    <p class="text-muted">
                        <?= $post->getContent() ?>
                    </p>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li class="list-item">
                            Lorem ipsum dolor sit amet
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5 text-center">
                <div class="container">
                    <h3>Commentaires</h3>
                </div>
            </div>
            <?php foreach ($comments as $comment) : ?>
                <div class="row mt-3">
                    <div class="col-md-1">
                    </div>
                    <?php if ($post->getId() === $comment->getIdPost()) : ?>
                        <div class="col-md-8 card">
                            <div class="btn-warning-post">
                                <i class="fas fa-exclamation-triangle"></i>
                                <a href="index.php?p=delete-com&id=<?= $comment->getIdPost() ?>&id_com=<?= $comment->getId() ?> " class="delete-com btn btn-danger btn-xs">delete</a>

                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>
                                        <?= htmlentities($comment->getAuthor()) ?>
                                    </h3>
                                </div>
                            </div>
                            <p>
                                <?= htmlentities($comment->getMessage()) ?>
                            </p>
                        </div>

                    <?php endif;?>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>