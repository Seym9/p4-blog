<?php ob_start(); ?>

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
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
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
                <?php if ($listComments['report'] > 0):?>
                    <tbody>
                    <tr>


                        <td>
                            <?= strip_tags($listComments['author']) ?>
                        </td>
                        <td>
                            <?= strip_tags($listComments['message']) ?>
                        </td>
                        <td>
                            <?= strip_tags($listComments['date_fr']) ?>
                        </td>
                        <td>
                            <?= strip_tags($listComments['report']) ?>
                        </td>
                        <td>
                            <a href="index.php?p=delete-com&id=<?= $listComments['id_post']?>&id_com=<?= $listComments['id']?> " class="delete-com btn btn-danger btn-xs">delete</a>
                        </td>
                    </tr>
                    </tbody>
                    <?php endif; ?>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require "view/layout.php";
?>
