<?php ob_start(); ?>
<div class="container" id="dashboard-main-container">
    <a href="index.php?p=post-creation">Crée un post</a>
    <?php foreach ($displayList as $posts): ?>
    <div class="col-md-6" id="post-dashboard-container">
        <div id="title-date-dashboard">
            <h2><?= $posts['post_title'] ?></h2>
            <p><?= $posts['date_fr'] ?></p>
        </div>
        <p><?= substr($posts['content'], 0 , 200) . "..."; ?></p>
        <div id="link-post-dashboard" class="link-dash">
            <a href="index.php?p=post-admin&id=<?= $posts["id"]?>">Voir</a>
            <a href="index.php?p=post-edit&id=<?= $posts["id"]?>">Edit</a>
            <a href="index.php?p=post-delete&id=<?= $posts["id"]?>" class="delete-post">Delete</a>
        </div>
    </div>
    <?php endforeach; ?>
    <div class="col-md-4" id="comment-dashboard-container">
        <div>
            test
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require "view/layout.php";
?>
<div class="album" id="home-post-container"> <!-- "bg-light" class fond blanc -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">

                    <p class="card-text"><?=substr($postList['content'], 0 , 50) . "...";?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href=index.php?p=post&id=<?= $postList["id"]?>" type="button" class="btn btn-sm btn-outline-secondary">Voir l'article</a>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>