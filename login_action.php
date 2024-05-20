<?php
session_start(); // Démarrer la session

include_once 'config/config.php'; // Inclure le fichier de configuration de la base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_utilisateur = $_POST['nom_utilisateur'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Requête SQL pour récupérer l'utilisateur par son nom d'utilisateur
    $sql = "SELECT * FROM utilisateurs WHERE nom_utilisateur = ?";
    $stmt = $connexion->prepare($sql);
    $stmt->execute([$nom_utilisateur]);

    // Vérifier si l'utilisateur existe
    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifier le mot de passe
        if (password_verify($mot_de_passe, $user['mot_de_passe'])) {
            // Le mot de passe est correct, l'utilisateur est connecté
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['nom_utilisateur'] = $user['nom_utilisateur'];
            $_SESSION['role'] = $user['role'];

            // Rediriger vers le profil de l'utilisateur
            header("Location: index.php?page=profile");
            exit();
        } else {
            // Le mot de passe est incorrect
            $error = "Nom d'utilisateur ou mot de passe incorrect";
        }
    } else {
        // L'utilisateur n'existe pas
        $error = "Nom d'utilisateur ou mot de passe incorrect";
    }
}
?>
