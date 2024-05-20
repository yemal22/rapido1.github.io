<?php
session_start();
$_SESSION['error']='';

include_once 'config/config.php'; // Inclure le fichier de configuration de la base de données

$error_message = ''; // Variable pour stocker les messages d'erreur

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_utilisateur = $_POST['nom_utilisateur'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $confirmer_mot_de_passe = $_POST['confirmer_mot_de_passe'];
    $role = "utilisateur";

    // Vérifier si les mots de passe correspondent
    if ($mot_de_passe !== $confirmer_mot_de_passe) {
        $error_message = "Les mots de passe ne correspondent pas.";
        $_SESSION['error'] = $error_message;
        header("Location: register.php");
        exit();
    } else {
        // Hacher le mot de passe
        $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);

        // Vérifier si le nom d'utilisateur ou l'email existe déjà
        $sql = "SELECT * FROM utilisateurs WHERE nom_utilisateur = ? OR email = ?";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([$nom_utilisateur, $email]);
        if ($stmt->rowCount() > 0) {
            $error_message = "Le nom d'utilisateur ou l'email existe déjà.";
            $_SESSION['error'] = $error_message;
            header("Location: register.php");
            exit();
        } else {
            // Insérer les données de l'utilisateur dans la base de données
            $sql = "INSERT INTO utilisateurs (nom_utilisateur, email, mot_de_passe, `role`) VALUES (?, ?, ?, ?)";
            $stmt = $connexion->prepare($sql);
            $stmt->execute([$nom_utilisateur, $email, $mot_de_passe_hache, $role]);
            $_SESSION['error']='';

            // Rediriger l'utilisateur vers la page de connexion après l'inscription
            header("Location: login.php");
            exit();
        }
    }
}
?>
