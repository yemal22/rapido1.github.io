<?php
include_once 'auth.php';

include_once 'includes/header.php'; 
?>
<body>
    <?php include_once 'includes/navbar.php'; ?>
    
    <div class="container mt-1">
        <h1>Tableau de bord</h1>
        <div class="row">
            <?php foreach ($courses as $course): ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $course['point_depart']; ?> - <?php echo $course['point_arrive']; ?></h5>
                            <p class="card-text">Date et heure: <?php echo $course['date_heure']; ?></p>
                            <?php 
                            $chauffeur_id = $course['chauffeur_id']; 
                            $courseChauf = ""; 
                            foreach ($chauffeurs as $chauffeur) {
                                if($chauffeur['chauffeur_id']==$chauffeur_id):
                                    $courseChauf = $chauffeur['nom'] . ' ' . $chauffeur['prenom'];
                                    break;
                                endif;
                            }
                            ?>
                            <p class="card-text">Chauffeur: <?php echo $courseChauf ; ?></p>
                            <p class="card-text">Statut: <span <?php 
                                switch ($course['statut']) {
                                    case 'En Attente':
                                        echo 'class="en-attente"';
                                        break;
                                    case 'En cours':
                                        echo 'class="en-cours"';
                                        break;
                                    case 'Terminée':
                                        echo 'class="termine"';
                                        break;
                                    default:
                                        break;
                                }
                            ?> ><?php echo $course['statut']; ?></span> </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include_once 'includes/footer.php'; ?>
</body>
</html>
