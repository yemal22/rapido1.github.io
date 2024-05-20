<?php
class UpdateStatusController {
    public function index() {
        if(isset($_GET['id']) && isset($_GET['cid'])){
            // Inclure le modèle des courses
            include_once 'models/CourseModel.php';

            // Créer une instance du modèle des courses
            $courseModel = new CourseModel();

            // Récupérer toutes les courses depuis le modèle
            $courseModel->updateCourseStatus($_GET['id']);

            // Inclure le modèle des courses
            include_once 'models/DriverModel.php';

            // Créer une instance du modèle des courses
            $driverModel = new DriverModel();

            // Récupérer toutes les courses depuis le modèle
            $driverModel->updateDriverStatus1($_GET['cid']);
            
        }
        // Rediriger vers le tableau de bord après l'ajout de la course
        header("Location: index.php?page=finish_course");
        exit();
    }
}