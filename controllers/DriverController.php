<?php
class DriverController {
    // public function drivers() {
    //     // Inclure le modèle des courses
    //     include_once 'models/CourseModel.php';

    //     // Créer une instance du modèle des courses
    //     $driverModel = new DriverModel();

    //     // Récupérer toutes les courses depuis le modèle
    //     $drivers = $driverModel->getAllDrivers();
    // }

    public function assignDriverToCourse() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['course_id'], $_POST['driver_id'])) {
            // Récupérer les données du formulaire
            $course_id = $_POST['course_id'];
            $driver_id = $_POST['driver_id'];

            // Inclure le modèle des courses
            include 'models/CourseModel.php';

            // Créer une instance du modèle des courses
            $courseModel = new CourseModel();

            // Appeler la méthode pour affecter le chauffeur à la course en attente
            $courseModel->assignDriverToCourse($course_id, $driver_id);

            // Rediriger vers la page de tableau de bord pour actualiser la liste des courses
            header("Location: index.php?page=dashboard");
            exit();
        }
    }
}