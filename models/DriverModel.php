<?php
class DriverModel {
    // Méthode pour récupérer tous les chauffeurs disponibles depuis la base de données
    public function getAvailableDrivers() {
        // Inclure le fichier de configuration de la base de données
        include 'config/config.php';

        // Requête SQL pour sélectionner tous les chauffeurs
        $sql = "SELECT * FROM chauffeurs WHERE disponible = 1";

        // Préparer la requête
        $req = $connexion->prepare($sql);

        // Exécuter la requête
        $req->execute();

        // Vérifier s'il y a des résultats
        if ($req->rowCount() > 0) {
            // Tableau pour stocker les données des courses
            $chauffeurs = array();

            // Parcourir les résultats de la requête et stocker les données dans le tableau
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                $chauffeurs[] = $row;
            }
            //print_r($chauffeurs);
            // Retourner le tableau des chauffeurs
            return $chauffeurs;
        } else {
            // S'il n'y a pas de chauffeurs, retourner un tableau vide
            return array();
        }
    }

    //Méthode pour récupérer un chauffeur spécifique
    

    //Méthode pour récupérer tous les chauffeurs
    public function getAllDrivers() {
        // Inclure le fichier de configuration de la base de données
        include 'config/config.php';

        // Requête SQL pour sélectionner tous les chauffeurs
        $sql = "SELECT * FROM chauffeurs";

        // Préparer la requête
        $req = $connexion->prepare($sql);

        // Exécuter la requête
        $req->execute();

        // Vérifier s'il y a des résultats
        if ($req->rowCount() > 0) {
            // Tableau pour stocker les données des courses
            $chauffeurs = array();

            // Parcourir les résultats de la requête et stocker les données dans le tableau
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                $chauffeurs[] = $row;
            }
            //print_r($chauffeurs);
            // Retourner le tableau des chauffeurs
            return $chauffeurs;
        } else {
            // S'il n'y a pas de chauffeurs, retourner un tableau vide
            return array();
        }
    }

    // Méthode pour mettre à jour le statut d'un chauffeur à indisponible
    public function updateDriverStatus($driver_id) {
        // Inclure le fichier de configuration de la base de données
        include 'config/config.php';
        $sql = "UPDATE chauffeurs SET disponible = 0 WHERE chauffeur_id = ?";
        $req = $connexion->prepare($sql);
        $req->execute([$driver_id]);
    }

    // Méthode pour mettre à jour le statut d'un chauffeur à disponible
    public function updateDriverStatus1($driver_id) {
        // Inclure le fichier de configuration de la base de données
        include 'config/config.php';
        $sql = "UPDATE chauffeurs SET disponible = 1 WHERE chauffeur_id = ?";
        $req = $connexion->prepare($sql);
        $req->execute([$driver_id]);
    }
}
?>
