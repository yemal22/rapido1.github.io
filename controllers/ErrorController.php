<?php
class ErrorController {
    public function index() {
        // Inclure le fichier d'en-tête
        include_once 'includes/header.php';

        // Afficher un message d'erreur générique
        ?>
        <div class="container mt-5 text-center">
            <h1>404 - Page non trouvée</h1>
            <p>Oups! La page que vous cherchez n'existe pas.</p>
            <a href="index.php" class="btn btn-primary">Retour à l'accueil</a>
        </div>
        <?php

        // Inclure le fichier du pied de page
        include_once 'includes/footer.php';
    }
}
?>
