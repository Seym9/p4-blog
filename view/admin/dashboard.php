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
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>
                        Titre
                    </th>
                    <th>
                        Commentaire
                    </th>
                    <th>
                        Signalés
                    </th>
                    <th>
                        Date de création
                    </th>
                    <th>
                        Options
                    </th>
                </tr>
                </thead>
                <?php foreach ($displayList as $posts): ?>


                <tbody>
                <tr>
                    <td>
                        <?= strip_tags($posts->getTitle()) ?>
                    </td>

                    <td>

                    </td>

                    <td>

                    </td>

                    <td>
                        <?= strip_tags($posts->getPostDate()) ?>
                    </td>
                    <td>
                        <a href="index.php?p=post-admin&id=<?= $posts->getId()?>" class="btn btn-primary">Voir</a>
                        <a href="index.php?p=post-edit&id=<?= $posts->getId()?>" class="btn btn-primary">Edit</a>
                        <a href="index.php?p=post-delete&id=<?= $posts->getId()?>" class="delete-post btn btn-primary">Delete</a>
                    </td>
                </tr>
                </tbody>
                <?php endforeach;?>

            </table>
        </div>
    </div>
</div>
