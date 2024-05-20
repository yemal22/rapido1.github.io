<?php include_once 'includes/header.php'; ?>
<body>
    <?php include_once 'includes/navbar.php'; ?>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Connexion</h3>
                    </div>
                    <div class="card-body">
                        <form action="login_action.php" method="post">
                            <div class="form-group">
                                <label for="nom_utilisateur">Nom d'utilisateur</label>
                                <input type="text" class="form-control" id="nom_utilisateur" name="nom_utilisateur" placeholder="Nom d'utilisateur" required>
                            </div>
                            <div class="form-group">
                                <label for="mot_de_passe">Mot de passe</label>
                                <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" placeholder="Mot de passe" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="register.php">Créer un compte</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'includes/footer.php'; ?>
</body>
</html>
