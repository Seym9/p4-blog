<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a href="index.php?p=dashboard" class="btn btn-primary">Post</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 table-responsive ">
            <table class="table table-striped toggle-circle-filler">
                <thead>
                <tr class="table-menu">
                    <th>
                        Pseudo
                    </th>
                    <th>
                        Message
                    </th>
                    <th>
                        Date
                    </th>
                    <th>
                        Nombre de signalements
                    </th>
                    <th>
                        Options
                    </th>
                </tr>
                </thead>
                <?php foreach ($displayListCom as $listComments): ?>
                <?php if ($listComments->getReport() > 0):?>
                    <tbody>
                    <tr class="dashboard-table">


                        <td>
                            <?= strip_tags($listComments->getAuthor()) ?>
                        </td>
                        <td>
                            <?= strip_tags($listComments->getMessage()) ?>
                        </td>
                        <td>
                            <?= $listComments->getCommentDate('d-m-Y') ?>
                        </td>
                        <td>
                            <?= $listComments->getReport() ?>
                        </td>
                        <td>
                            <a href="index.php?p=delete-com&id=<?= $listComments->getIdPost()?>&id_com=<?= $listComments->getId()?> " class="delete-com btn btn-danger btn-xs">delete</a>
                        </td>
                    </tr>
                    </tbody>
                    <?php endif; ?>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</div>
