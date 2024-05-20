<?php session_start(); ?>
<?php include_once 'includes/header.php'; ?>
<body>
    <?php include_once 'includes/navbar.php'; ?>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Créer un compte</h3>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($_SESSION['error'])): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_SESSION['error']; $_SESSION['error']=''; ?>
                            </div>
                        <?php endif; ?>
                        <form action="register_action.php" method="post">
                            <div class="form-group">
                                <label for="nom_utilisateur">Nom d'utilisateur</label>
                                <input type="text" class="form-control" id="nom_utilisateur" name="nom_utilisateur" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="mot_de_passe">Mot de passe</label>
                                <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmer_mot_de_passe">Confirmer le mot de passe</label>
                                <input type="password" class="form-control" id="confirmer_mot_de_passe" name="confirmer_mot_de_passe" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Créer un compte</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="login.php">Vous avez déjà un compte? Connectez-vous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'includes/footer.php'; ?>
</body>
</html>
