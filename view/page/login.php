<?php ob_start(); ?>
<form class="form-signin">

    <div class="form-label-group">
        <input type="text" class="form-control" placeholder="Email address" name="login" required autofocus>
        <label for="inputEmail">Identifiant</label>
    </div>

    <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
        <label for="inputPassword">Mot de passe</label>
    </div>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
</form>
<?php
$content = ob_get_clean();
require "view/layout.php";
?>
