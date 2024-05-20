<?php

function redirectToLogin() {
    header("Location: login.php");
    exit();
}

function isAdmin() {
    return isset($_SESSION['role']) && $_SESSION['role'] == 'admin';
}

function isUser() {
    return isset($_SESSION['role']) && $_SESSION['role'] == 'utilisateur';
}

function isDriver() {
    return isset($_SESSION['role']) && $_SESSION['role'] == 'chauffeur';
}

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    redirectToLogin();
}


?>
