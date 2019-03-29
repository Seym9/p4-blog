
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Mon blog</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="public/css/dashboard.css">
    <link rel="stylesheet" href="public/css/menu.css">
</head>
<body>
<nav class="menu">
    <div class="menu-container">
        <ul class="menu-list">
            <li class="menu-item"><a href="index.php" class="menu-link">home</a></li>
            <li class="menu-item"><a href="index.php?p=login" class="menu-link">login</a></li>
            <li class="menu-item"><a href="index.php?p=dashboard" class="menu-link">dashboard</a></li>
            <li class="menu-item"><a href="index.php?p=logout" class="menu-link">logout</a></li>
            <li class="menu-item"><a href="#" class="menu-link">X</a></li>
            <li class="menu-item"><a href="#" class="menu-link">X</a></li>
        </ul>
    </div>
    <a href="#" class="menu-toggle"><span class="menu-hamburger"></span></a>
</nav>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        <div class="starter-template">
            <?= $content; ?>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=m4qzhaq03qnt02y3ound5ezanr4pkeviniqg102r49217omn"></script>
<script src="public/js/tiny.js"></script>
<script src="public/js/fr_FR.js"></script>
<script src="public/js/deletePost.js"></script>
<script src="public/js/actionStatus.js"></script>
<script src="public/js/menu.js"></script>
</body>
</html>
