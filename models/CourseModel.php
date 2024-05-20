<?php
class CourseModel {
    // Méthode pour récupérer toutes les courses depuis la base de données
    public function getAllCourses() {
        // Inclure le fichier de configuration de la base de données
        include_once 'config/config.php';

        // Requête SQL pour sélectionner toutes les courses
        $sql = "SELECT * FROM courses ORDER BY course_id DESC";

        // Préparer la requête
        $req = $connexion->prepare($sql);

        // Exécuter la requête
        $req->execute();

        // Vérifier s'il y a des résultats
        if ($req->rowCount() > 0) {
            // Tableau pour stocker les données des courses
            $courses = array();

            // Parcourir les résultats de la requête et stocker les données dans le tableau
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                $courses[] = $row;
            }

            // Retourner le tableau des courses
            return $courses;
        } else {
            // S'il n'y a pas de courses, retourner un tableau vide
            return array();
        }
    }

    // Méthode pour enregistrer une course
    public function saveCourse($point_depart, $point_arrive, $date_heure, $statut) {
        // Inclure le fichier de configuration de la base de données
        include_once 'config/config.php';

        // Requête pour insérer une course
        $sql = "INSERT INTO courses (point_depart, point_arrive, date_heure, statut) VALUES (?, ?, ?, ?)";

        // Préparer la requete
        $req = $connexion->prepare($sql);

        // Exécuter la requête
        $req->execute([$point_depart, $point_arrive, $date_heure, $statut]);
    }

    // Méthode pour récupérer toutes les courses en attente
    public function getPendingCourses() {
        // Inclure le fichier de configuration de la base de données
        include_once 'config/config.php';

        // Requête SQL pour sélectionner toutes les courses en attente
        $sql = "SELECT * FROM courses WHERE statut = 'En Attente'";

        // Préparer la requête
        $req = $connexion->prepare($sql);

        // Exécuter la requête
        $req->execute();

        // Vérifier s'il y a des résultats
        if ($req->rowCount() > 0) {
            // Tableau pour stocker les données des courses
            $courses = array();

            // Parcourir les résultats de la requête et stocker les données dans le tableau
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                $courses[] = $row;
            }

            // Retourner le tableau des courses
            return $courses;
        } else {
            // S'il n'y a pas de courses, retourner un tableau vide
            return array();
        }
    }

    // Méthode pour récupérer toutes les courses en cours
    public function getCourses() {
        // Inclure le fichier de configuration de la base de données
        include_once 'config/config.php';

        // Requête SQL pour sélectionner toutes les courses en attente
        $sql = "SELECT * FROM courses WHERE statut = 'En cours'";

        // Préparer la requête
        $req = $connexion->prepare($sql);

        // Exécuter la requête
        $req->execute();

        // Vérifier s'il y a des résultats
        if ($req->rowCount() > 0) {
            // Tableau pour stocker les données des courses
            $courses = array();

            // Parcourir les résultats de la requête et stocker les données dans le tableau
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                $courses[] = $row;
            }

            // Retourner le tableau des courses
            return $courses;
        } else {
            // S'il n'y a pas de courses, retourner un tableau vide
            return array();
        }
    }

    // Méthode pour affecter un chauffeur à une course en attente
    public function assignDriverToCourse($course_id, $driver_id) {
        // Inclure le fichier de configuration de la base de données
        include_once 'config/config.php';

        // Requête SQL pour mettre à jour le chauffeur de la course en attente
        $sql = "UPDATE courses SET chauffeur_id = ?, statut = 'En Cours' WHERE course_id = ? AND statut = 'En Attente'";

        // Préparer la requête
        $req = $connexion->prepare($sql);

        // Exécuter la requête
        $req->execute([$driver_id, $course_id]);
    }

    //Méthode pour mettre à jour la statue de la course
    public function updateCourseStatus($course_id){
        // Inclure le fichier de configuration de la base de données
        include_once 'config/config.php';

        // Requête SQL pour mettre à jour le statut de la course
        $sql = "UPDATE courses SET statut = 'Terminée' WHERE course_id = ?";

        // Préparer la requête
        $req = $connexion->prepare($sql);

        // Exécuter la requête
        $req->execute([$course_id]);

    }

}
?>
