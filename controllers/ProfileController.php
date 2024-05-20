<?php

class ProfileController {

    public function index() {
        // Vérifier si l'utilisateur est connecté
        if (!isset($_SESSION['user_id'])) {
            header("Location: login.php");
            exit();
        }

        // Inclure le modèle des utilisateurs
        include_once 'models/UserModel.php';
        $userModel = new UserModel();

        // Récupérer les informations de l'utilisateur
        $user = $userModel->getUserById($_SESSION['user_id']);

        // Inclure la vue pour afficher le profil utilisateur
        include_once 'views/profile.php';
    }
}
?>
