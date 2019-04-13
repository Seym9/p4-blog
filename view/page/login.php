<div class="container">
    <?php if($error): ?>
        <div class="alert text-center alert-danger alert-dismissible">
            <strong>Erreur</strong> Identifiant ou mot de passe incorrect ! !
        </div>
    <?php endif; ?>
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header text-center">
                <h3>Connexion</h3>
            </div>
            <div class="card-body">
                <form action="index.php?p=login" method="post">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="username" name="login">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="password" name="pass">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn  float-right login_btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

