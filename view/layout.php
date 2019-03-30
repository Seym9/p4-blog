<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Mon blog</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/home.css">
    <link rel="stylesheet" href="public/css/dashboard.css">
    <link rel="stylesheet" href="public/css/menu.css">
    <link rel="stylesheet" href="public/css/snow.css">
</head>
<body>
<div class="snow">
    <div class="snow__layer"><div class="snow__fall"></div></div>
    <div class="snow__layer"><div class="snow__fall"></div></div>
    <div class="snow__layer">
        <div class="snow__fall"></div>
        <div class="snow__fall"></div>
        <div class="snow__fall"></div>
    </div>
    <div class="snow__layer"><div class="snow__fall"></div></div>
</div>
<!-- menu -->
<div class="menu">
    <input type="checkbox" name="menuburger" id="menuburger">
    <label for="menuburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </label>
    <nav class="nav-menu">
        <a class="nav-link" href="index.php">Home</a>
        <a class="nav-link" href="index.php?p=login">Login</a>
        <a class="nav-link" href="index.php?p=dashboard">dashboard</a>
        <a class="nav-link" href="index.php?p=logout">logout</a>
    </nav>
</div>
<!-- Begin page content-->
<main role="main" class="site-container">
    <div class="container" class="site-container">
        <div class="container">
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
