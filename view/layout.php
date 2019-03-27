
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Mon blog</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="public/css/dashboard.css">
</head>
<body class="d-flex flex-column h-100">
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Fixed navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active" style="display: flex">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="index.php?p=login">Login</a>
                    <a class="nav-link" href="index.php?p=dashboard">dashboard</a>
                    <a class="nav-link" href="index.php?p=logout">logout</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        <div class="starter-template" style="padding-top: 100px">
            <?= $content; ?>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=m4qzhaq03qnt02y3ound5ezanr4pkeviniqg102r49217omn"></script>
<script src="public/js/tiny.js"></script>
<script src="public/js/fr_FR.js"></script>
<script src="public/js/deletePost.js"></script>
</body>
</html>
