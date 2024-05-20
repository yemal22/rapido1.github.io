<?php
class FinishCourseController{
    public function index() {
        // Inclure le modèle des courses
        include_once 'models/CourseModel.php';

        // Créer une instance du modèle des courses
        $courseModel = new CourseModel();

        // Récupérer toutes les courses en attente depuis le modèle
        $courses = $courseModel->getCourses();

        // Inclure le modèle des courses
        include_once 'models/DriverModel.php';

        // Créer une instance du modèle des courses
        $driverModel = new DriverModel();

        // Récupérer toutes les courses depuis le modèle
        $chauffeurs = $driverModel->getAllDrivers();

        // Afficher la vue d'assignation du chauffeur avec les chauffeurs et les courses en attente
        include_once 'views/finish_course.php';
    
    }
}