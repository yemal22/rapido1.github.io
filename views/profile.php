<?php include_once 'includes/header.php'; ?>
<body>
    <?php include_once 'includes/navbar.php'; ?>
    
    <div class="container mt-5">
        <h1>Profil de <?php echo htmlspecialchars($user['nom_utilisateur']); ?></h1>
        <p><strong>Email :</strong> <?php echo htmlspecialchars($user['email']); ?></p>
        <p><strong>Rôle :</strong> <?php echo htmlspecialchars($user['role']); ?></p>

        <h2>Actions possibles</h2>
        <ul>
            <li><a href="index.php?page=dashboard">Liste des Courses</a></li>
            <li><a href="index.php?page=add_course">Ajouter une course</a></li>
            <?php if ($_SESSION['role'] === 'admin'): ?>
                <li><a href="index.php?page=assign_driver">Affecter un chauffeur</a></li>
            <?php endif; ?>
            <?php if ($_SESSION['role'] === 'chauffeur' || $_SESSION['role'] === 'admin'): ?>
                <li><a href="index.php?page=finish_course">Terminer une course</a></li>
            <?php endif; ?>
        </ul>
    </div>

    <?php include_once 'includes/footer.php'; ?>
</body>
</html>
