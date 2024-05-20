<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

class AssignDriverController {
    public function index() {
        // Inclure le modèle des chauffeurs
        include_once 'models/DriverModel.php';

        // Inclure le modèle des courses
        include_once 'models/CourseModel.php';

        // Créer une instance du modèle des chauffeurs
        $driverModel = new DriverModel();

        // Créer une instance du modèle des courses
        $courseModel = new CourseModel();

        // Récupérer toutes les courses en attente depuis le modèle
        $courses = $courseModel->getPendingCourses();

        // Récupérer tous les chauffeurs disponibles depuis le modèle
        $chauffeurs = $driverModel->getAvailableDrivers();

        // Afficher la vue d'assignation du chauffeur avec les chauffeurs et les courses en attente
        include_once 'views/assign_driver.php';
    
    }

    public function assignDriverToCourse($course_id, $driver_id) {
        include_once 'models/DriverModel.php';
        include_once 'models/CourseModel.php';
        
        $driverModel = new DriverModel();
        $courseModel = new CourseModel();
        
        $driverModel->updateDriverStatus($driver_id);
        $courseModel->assignDriverToCourse($course_id, $driver_id);
    }
}
?>
