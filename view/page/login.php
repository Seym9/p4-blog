<?php ob_start(); ?>
    <div class="container">
        <form action="index.php?p=login" method="post">
            <div>
                <label for="username">Identifiant</label>
                <input type="text" name="login" id="username">
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="pass" id="password">
            </div>
            <div>
                <input type="submit" value="Send" class="btn btn-primary">
            </div>
        </form>
    </div>
<?php
$content = ob_get_clean();
require "view/layout.php";
?>
