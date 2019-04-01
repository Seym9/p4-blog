<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-11 action-btn-postadmin">
                    <a href="index.php?p=post-edit&id=<?= $displayPost["id"]?>" class="btn btn-warning">Modifier</a>
                    <a href="index.php?p=post-delete&id=<?= $displayPost["id"]?>" class="delete-post btn btn-danger">Supprimer</a>
                    <div class="page-header text-center">
                        <h1>
                            <?= $displayPost['post_title'] ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-8">
                    <p class="text-muted">
                        <?= $displayPost['content'] ?>
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
            <?php foreach ($displayComments as $commentList) : ?>
                <div class="row mt-3">
                    <div class="col-md-1">
                    </div>
                    <?php if ($displayPost['id'] === $commentList['id_post']) : ?>
                        <div class="col-md-8 card">
                            <div class="btn-warning-post">
                                <i class="fas fa-exclamation-triangle"></i>
                                <a href="index.php?p=delete-com&id=<?= $commentList['id_post']?>&id_com=<?= $commentList['id']?> " class="delete-com btn btn-danger btn-xs">delete</a>

                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>
                                        <?= $commentList['author'] ?>
                                    </h3>
                                </div>
                            </div>
                            <p>
                                <?= $commentList['message'] ?>
                            </p>
                        </div>

                    <?php endif;?>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require "view/layout.php";
?>
