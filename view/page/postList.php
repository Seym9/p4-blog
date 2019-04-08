<div class="container">
    <div class="row postlist-content">
        <div class="col-md-12">
<!--            <div class="row">-->
<!--                <div class="col-md-12 header-postlist">-->
<!--                    <h3 class="text-center black-postlist">Billet simple pour l'Alaska</h3>-->
<!--                    <p class="text-center lead black-postlist">-->
<!--                        L'intégralité des chapitres-->
<!--                    </p>-->
<!--                    <div class="col-md-12">-->
<!--                        <blockquote class="blockquote">-->
<!--                            <p class="mb-0">-->
<!--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.-->
<!--                            </p>-->
<!--                            <footer class="blockquote-footer mt-1">-->
<!--                                Someone famous in <cite>Source Title</cite>-->
<!--                            </footer>-->
<!--                        </blockquote>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <?php foreach ($displayList as $list) :?>
            <div class="row">
                <div class="card text-center col-md-12 jumbotron">
                    <h3>
                        <?= ucfirst($list->getTitle()) ?>
                    </h3>
                    <p class="text-center mt-5">
                        <?= strip_tags(substr($list->getContent(),0,350)) . "..." ?>
                    </p>
                    <a href="index.php?p=post&id=<?= $list->getId()?>" class="btn">Lire le chapitre</a>
                    <p class="col-md-4 date-postlist black-postlist">Publié le : <?=$list->getDate('d-m-Y') ?> <br>par Jean Forteroche</p>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

