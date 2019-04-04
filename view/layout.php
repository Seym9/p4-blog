<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Mon blog</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">

    <link rel="stylesheet" href="public/css/dashboard.css">
    <link rel="stylesheet" href="public/css/menu.css">
    <link rel="stylesheet" href="public/css/snow.css">
    <link rel="stylesheet" href="public/css/post.css">
    <link rel="stylesheet" href="public/css/bootstrap.css">


    <?php if (isset($_GET['p']) && ($_GET['p'] === "login-page")): ?>
        <link rel="stylesheet" href="public/css/login.css">
    <?php endif; ?>

    <?php if (isset($_GET['p']) && ($_GET['p'] === "post-list")): ?>
        <link rel="stylesheet" href="public/css/postlist.css">
    <?php endif; ?>
    <?php if (!isset($_GET['p']) || empty($_GET['p'])): ?>
        <link rel="stylesheet" href="public/css/home.css">
    <?php endif; ?>
</head>
<body>
<aside>
    <div class="close">
        <div></div>
        <div></div>
    </div>
    <nav>
        <ul>
            <li>
            <a class="nav-link" href="index.php">Home</a>
            </li>
            <li>
                <a class="nav-link" href="index.php?p=login-page">Login</a>
            </li>
            <li>
                <a class="nav-link" href="index.php?p=dashboard">dashboard</a>
            </li>
            <li>
            <a class="nav-link" href="index.php?p=logout">logout</a>
            </li>
        </ul>
    </nav>
</aside>

<div class="overlay"></div>

<div class="hamburger_menu">
    <div></div>
    <div></div>
    <div></div>
</div>

        <?= $content; ?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=m4qzhaq03qnt02y3ound5ezanr4pkeviniqg102r49217omn"></script>
<script src="public/js/menu.js"></script>
<script src="public/js/tiny.js"></script>
<script src="public/js/fr_FR.js"></script>
<script src="public/js/deletePost.js"></script>
<script src="public/js/actionStatus.js"></script>
<script src="public/js/scroll.js"></script>
<script src="public/js/report.js"></script>
</body>
</html>
