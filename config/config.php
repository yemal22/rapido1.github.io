<?php
    $server = "localhost";
    $login = "root";
    $pass = "";
    $base = "rapido";

    try {
        $connexion = new PDO("mysql:host=$server;dbname=$base", $login, $pass);

    } catch (PDOException $e) {
        echo "Erreur de connexion: ".$e->getMessage();
    }