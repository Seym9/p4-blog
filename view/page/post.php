<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php foreach ($displayPost as $post) : ?>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-11">
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
                <?php endforeach ?>
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
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 form-post">
                            <form action="index.php?p=sendcomment&id_post=<?= $post->getId()?>" method="post" id="form-comment">
                                <div>
                                    <label for="author">Nom ou pseudo</label>
                                    <input name="author" type="text" id="author" placeholder="Votre nom">
                                </div>
                                <div>
                                    <label for="comment">Message</label>
                                    <textarea name="comment" id="comment" cols="75" rows="5" placeholder="Votre message"></textarea>
                                </div>
                                <div>
                                    <input type="submit" value="Send" class="btn btn-primary">
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

            <div class="row mt-3">
                <div class="col-md-1">
                </div>

                 <!--($post->getId() === $commentList['id']) -->
                <div class="col-md-8 card">
                    <div class="btn-warning-post">
                        <i class="fas fa-exclamation-triangle"></i>
                        <a href="index.php?p=report&report_com= <!--$commentList->getId()--> &id_post= <!--$post->getId()-->" class="btn btn-danger btn-xs report" >Signaler</a>
                    </div>
                    <div class="row">
                        <div class="col-md-8">

                            <h3>
                               <!-- $commentList->getAuthor() -->
                            </h3>
                        </div>
                    </div>

                    <p>
                         <!--$commentList->getMessage()-->
                    </p>
                </div>
                <!-- endif-->
            </div>
            <!--endforeach-->
        </div>
    </div>
</div>