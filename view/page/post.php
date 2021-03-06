
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row post-content">
                <div class="col-md-1">
                </div>
                <div class="col-md-9">
                    <p class="text-muted">
                    <div class="page-header text-center">
                        <h1>
                            <?= $post->getTitle() ?>
                        </h1>
                    </div>
                        <?= $post->getContent() ?>
                    </p>
                    <p>Par <span><?= $post->getAuthor(); ?></span></p>
                </div>
            </div>
            <div class="row pt-5 text-center post-form">
                <div class="container">
                    <h3>Commentaires</h3>
                </div>
            </div>
            <div class="row post-form pb-5">
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 form-post pb-5">
                            <form action="index.php?p=sendcomment&id_post=<?= $post->getId()?>" method="post" id="form-comment">
                                <div>
                                    <label for="author">Nom ou pseudo</label><br>
                                    <input class="author-comment" name="author" type="text" id="author" placeholder="Votre nom"><br>
                                    <span class="error-author-comment">3 lettres minimum<br>Seul les lettres , chiffres et _ sont acceptés</span>
                                </div>
                                <div>
                                    <label for="comment">Message</label><br>
                                    <textarea name="comment" id="comment" cols="40" rows="5" placeholder="Votre message"></textarea>
                                    <span class="error-comment">Le message est vide !</span>
                                </div>
                                <div>
                                    <input type="submit" value="Send" class="btn btn-primary" id="submit-comment">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                </div>
            </div>

            <!--($displayComments as $commentList)-->
            <?php foreach ($comments as $comment): ?>
            <div class="row pt-5 post-comments">
                <div class="col-md-8 card container">
                    <div class="btn-warning-post">
                        <p class="post-date-comment">Le <?= $comment->getCommentDate('d-m-Y'); ?></p>
                        <i class="fas fa-exclamation-triangle"></i>
                        <a href="index.php?p=report&report_com=<?=$comment->getId()?>&id_post=<?=$post->getId()?>" class="btn btn-danger btn-xs report" >Signaler</a>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <h3><?= htmlentities($comment->getAuthor())?></h3>
                        </div>
                    </div>
                    <p><?= htmlentities($comment->getMessage()) ?></p>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>