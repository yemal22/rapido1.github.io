<nav class="navbar navbar-expand-lg navbar-dark " data-scroll-header >
    <div class="container">
        <a class="navbar-brand rapido" href="index.php"><span class="rapido"></span>Taxi<span class="taxi">RAPIDO</span>Express<span></span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-lg-2" id="navbarSupportedContent">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-black" href="index.php?page=dashboard">Tableau de bord</a>
                </li>
                <li class="nav-item dropdown text-black">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Gestion des courses</a>
                    <ul class="dropdown-menu dropdown-menu-dark action">
                        <li class="dropdown-item">
                            <a class="nav-link text-black" href="index.php?page=add_course">Ajouter une course</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-black" href="index.php?page=assign_driver">Affecter un chauffeur</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-black" href="index.php?page=finish_course">Terminer une course</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="index.php?page=aide">Aide</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="index.php?page=contact">Contatez-nous</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <?php
                if (isset($_SESSION['user_id'])) {
                    echo '
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> ' . $_SESSION['nom_utilisateur'] . '
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="index.php?page=profile">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Paramètres</a></li>
                            <li><a class="dropdown-item" href="logout.php">Déconnexion</a></li>
                        </ul>
                    </li>
                    ';
                } else {
                    echo '
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white me-2" href="login.php">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success text-white" href="register.php">Inscription</a>
                    </li>
                    ';
                }
                ?>
            </ul>
        </div>
    </div>   
</nav>
