<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-11">
                    <div class="page-header">
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
                    <p>
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
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <form action="index.php?p=sendcomment&id_post=<?= $displayPost['id']?>" method="post" id="form-comment">
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
            <?php foreach ($displayComments as $commentList) : ?>
            <div class="row">
                <div class="col-md-1">
                </div>

                <?php if ($displayPost['id'] === $commentList['id_post']) : ?>
                <div class="col-md-8 card">
                    <div class="row">
                        <div class="col-md-8">
                            <h3>
                                <?= $commentList['author'] ?>
                            </h3>
                        </div>
                    </div>
                    <div>
                        <a href="index.php?p=report&report_com=<?= $commentList['id'] ?>&id_post=<?= $commentList['id_post']?>">report</a>
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
