<?php
class AddCourseController {
    public function add() {
        //Inclure la vue du formulaire
        include 'views/add_course.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Vérifier les données du formulaire
            $point_depart = $_POST['point_depart'];
            $point_arrivee = $_POST['point_arrive'];
            $date_heure = $_POST['date_heure'];
            $statut = "En Attente";

            // Inclure le modèle des courses
            include_once 'models/CourseModel.php';

            // Créer une instance du modèle des courses
            $courseModel = new CourseModel();

            // Enregistrer la nouvelle course
            $courseModel->saveCourse($point_depart, $point_arrivee, $date_heure, $statut);

            // Rediriger vers le tableau de bord après l'ajout de la course
            //header("Location: index.php?page=dashboard");
            //exit();
        }
    }
}
?>
