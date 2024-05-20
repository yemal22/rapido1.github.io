<?php
include_once 'config.php';

$sql = "CREATE TABLE IF NOT EXISTS chauffeurs(
                chauffeur_id INT PRIMARY KEY AUTO_INCREMENT,
                nom VARCHAR(25),
                prenom VARCHAR(25),
                telephone VARCHAR(15),
                sexe CHAR(1),
                disponible BOOLEAN
            );
            CREATE TABLE IF NOT EXISTS courses(
                course_id INT PRIMARY KEY AUTO_INCREMENT,
                point_depart VARCHAR(25) NOT NULL,
                point_arrive VARCHAR(25) NOT NULL,
                date_heure DATETIME NOT NULL,
                chauffeur_id INT,
                FOREIGN KEY (chauffeur_id) REFERENCES chauffeurs(chauffeur_id),
                statut VARCHAR(15)
            );

        ";

        try {
            $req = $connexion->prepare($sql);
            $req->execute();
            echo "Table créée avec succès";
        } catch (PDOException $e) {
            echo "Erreur de création des tables: ".$e->getMessage();
        }