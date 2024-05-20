<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <?php 
    $title = "Taxi";
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include_once 'includes/header.php'; 
    ?>
    <body>
        <?php include_once 'includes/navbar.php'; ?>
        <section class="bg-position-top-center bg-repeat-0 pt-2">
        
            <?php

            // Définir la page par défaut si le paramètre 'page' n'est pas spécifié
            $page = isset($_GET['page']) ? $_GET['page'] : 'index';

            // Inclure la page correspondante en fonction de la valeur du paramètre 'page'
            switch ($page) {
                case 'index':
                    ?>
                    <!-- <img src="imgs/hero-img.png" alt="hero-image" class=" img-fluid "> -->
                    
                        <div class="container pt-1">
                            <div class="row pt-lg-4 pt-xl-5">
                                <div class="col-lg-4 col-md-5 pt-3 pt-md-4 pt-lg-5">
                                    <h1 class="display-4 text-light pb-2 mb-4 me-md-n5">Bienvenue chez TaxiRapido Express</h1>
                                    <p class="fs-lg text-light opacity-70">Votre solution de transport rapide et fiable en ville.  Chez CityRapido Transport, nous nous engageons à offrir des services de taxi rapides, sûrs et confortables pour tous vos besoins de déplacement en ville. Que ce soit pour vos trajets quotidiens ou vos sorties nocturnes, nous sommes là pour vous.</p>
                                </div>
                                <div class="col-lg-8 col-md-7 pt-md-5"><img class="d-block mt-4 ms-auto" src="imgs/hero-img.png" width="800" alt="Car">
                            </div>
                            </div>
                        </div>
                    </section>
                    <?php 
                    break;
                case 'dashboard':
                    include_once 'controllers/DashboardController.php';
                    $controller = new DashboardController();
                    $controller->index();
                    break;
                case 'add_course':
                    include_once 'controllers/AddCourseController.php';
                    $controller = new AddCourseController();
                    $controller->add();
                    break;
                case 'assign_driver':
                    include_once 'controllers/AssignDriverController.php';
                    $controller = new AssignDriverController();
                    $controller->index();
                    break;
                case 'profile':
                    include_once 'controllers/ProfileController.php';
                    $controller = new ProfileController();
                    $controller->index();
                    break;
                case 'finish_course':
                    include_once 'controllers/FinishCourseControllers.php';
                    $controller = new FinishCourseController();
                    $controller->index();
                    break;
                case 'update_status':
                    include_once 'controllers/UpdateStatusController.php';
                    $controller = new UpdateStatusController();
                    $controller->index();
                    break;
                case 'contact':
                    include_once 'controllers/ContactController.php';
                    $controller = new ContactController();
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $controller->sendContact();
                    } else {
                        $controller->index();
                    }
                    break;
                case 'aide':
                    include_once 'controllers/HelpController.php';
                    $controller = new HelpController();
                    $controller->index();
                    break;
                // Ajoutez d'autres cas pour d'autres pages au besoin
                default:
                    include_once 'controllers/ErrorController.php';
                    $controller = new ErrorController();
                    $controller->index();
            }
        ?>
        </section>
    
    

        <?php include_once 'includes/footer.php'; ?>
    </body>
</html>
