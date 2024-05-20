<!DOCTYPE html>
<html lang="fr">
    <?php 
    $title = "Contact";
    error_reporting(E_ALL);
    ini_set('display_errors', 1);    

    include_once 'includes/header.php'; 
    ?>
<body>
    <?php include_once 'includes/navbar.php'; ?>
    
    <div class="container mt-5">
        <h1>Aide</h1>
        <div class="card">
            <div class="card-body bg-secondary ">
                <h2>Bienvenue dans la section d'aide de CityRapido</h2>
                <p>Cette section vous guidera à travers les différentes fonctionnalités de notre application de gestion de courses de taxis.</p>
                
                <h3>Tableau de bord</h3>
                <p>Le tableau de bord affiche toutes les courses effectuées par les taxis de notre compagnie. Vous y trouverez les informations suivantes :</p>
                <ul>
                    <li>ID de la course</li>
                    <li>Point de départ</li>
                    <li>Point d'arrivée</li>
                    <li>Date et heure</li>
                    <li>Chauffeur affecté</li>
                    <li>Statut de la course (en cours, terminée)</li>
                </ul>

                <h3>Ajouter une course</h3>
                <p>Pour ajouter une nouvelle course :</p>
                <ol>
                    <li>Accédez à la section "Ajouter une course" via la barre de navigation.</li>
                    <li>Remplissez les champs requis : point de départ, point d'arrivée, date et heure prévues.</li>
                    <li>Cliquez sur "Ajouter" pour enregistrer la nouvelle course.</li>
                </ol>

                <h3>Assigner un chauffeur</h3>
                <p>Pour assigner un chauffeur à une course en attente :</p>
                <ol>
                    <li>Accédez à la section "Assigner Chauffeur" via la barre de navigation.</li>
                    <li>Dans le tableau des courses en attente, sélectionnez un chauffeur disponible pour chaque course à partir du menu déroulant.</li>
                    <li>Le statut de la course passera à "En cours" et le chauffeur sera marqué comme "Indisponible".</li>
                </ol>

                <h3>Contactez-nous</h3>
                <p>Pour toute question ou assistance supplémentaire, n'hésitez pas à nous contacter via la section "Contact" de la barre de navigation.</p>
            </div>
        </div>
    </div>

    <?php include_once 'includes/footer.php'; ?>
</body>
</html>
