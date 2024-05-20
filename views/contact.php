<!DOCTYPE html>
<html lang="fr">
    <?php 
    $title = "Contact";
    error_reporting(E_ALL);
    ini_set('display_errors', 1);    

    
include_once 'includes/header.php'; ?>
<body>
    <?php include_once 'includes/navbar.php'; ?>

    <div class="container mt-5">
        <h1>Contactez-nous</h1>
        <form action="index.php?page=contact" method="post">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Sujet</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>

    <?php include_once 'includes/footer.php'; ?>
</body>
</html>
