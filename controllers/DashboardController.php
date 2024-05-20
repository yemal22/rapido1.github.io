<?php
class DashboardController {
    public function index() {
        // Inclure le modèle des courses
        include_once 'models/CourseModel.php';

        // Créer une instance du modèle des courses
        $courseModel = new CourseModel();

        // Récupérer toutes les courses depuis le modèle
        $courses = $courseModel->getAllCourses();

        // Inclure le modèle des courses
        include_once 'models/DriverModel.php';

        // Créer une instance du modèle des courses
        $driverModel = new DriverModel();

        // Récupérer toutes les courses depuis le modèle
        $chauffeurs = $driverModel->getAllDrivers();

        // Inclure la vue du tableau de bord
        include_once 'views/dashboard.php';
    }
}
?>
