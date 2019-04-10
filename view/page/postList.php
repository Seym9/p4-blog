<div class="container">
    <div class="row postlist-content">
        <div class="col-md-12">
            <?php foreach ($displayList as $list) :?>
            <div class="row">
                <div class="card text-center col-md-12 jumbotron">
                    <h3>
                        <?= (ucfirst($list->getTitle())) ?>
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

