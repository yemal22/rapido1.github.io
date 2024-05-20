<?php include_once 'includes/header.php';
?>
<body style="min-height: 100vh;" >
    <?php include_once 'includes/navbar.php';?>
    <?php include_once 'auth.php';

    if (!isAdmin()) {
        echo "<p style='color: red;'>Accès refusé. Vous n'avez pas les permissions nécessaires pour accéder à cette page.</p>";
        include_once 'includes/footer.php';
        exit();
    } ?>
    
    <div class="container mt-5">
        <h1>Assigner un chauffeur à une course en attente</h1>
        <form action="index.php?page=assign_driver" method="post" id="assignDriverForm">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Course</th>
                        <th>Point de départ</th>
                        <th>Point d'arrivée</th>
                        <th>Date et heure</th>
                        <th>Chauffeur</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($courses as $course): ?>
                        <tr>
                            <td><?php echo $course['course_id']; ?></td>
                            <td><?php echo $course['point_depart']; ?></td>
                            <td><?php echo $course['point_arrive']; ?></td>
                            <td><?php echo $course['date_heure']; ?></td>
                            <td>
                                <select class="form-control ajax1" name="driver_id[<?php echo $course['course_id']; ?>]">
                                    <?php foreach ($chauffeurs as $chauffeur): 
                                            $value =  $chauffeur['chauffeur_id'];
                                            $name = $chauffeur['chauffeur_id'] > 1? $chauffeur['nom'] . ' ' . $chauffeur['prenom']: "Selectionnez un Chauffeur";
                                        ?>
                                        <option value="<?php echo $value; ?>"><?php echo $name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
        </form>
    </div>

    <?php include_once 'includes/footer.php'; ?>
</body>
</html>
