<?php include_once 'includes/header.php'; ?>
<body>
    <?php include_once 'includes/navbar.php'; ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-primary text-white">
                        <h3 class="text-center font-weight-light my-4">Ajouter une nouvelle course</h3>
                    </div>
                    <div class="card-body">
                        <form action="index.php?page=add_course" method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="point_depart" type="text" name="point_depart" required>
                                <label for="point_depart">Point de départ</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="point_arrivee" type="text" name="point_arrive" required>
                                <label for="point_arrivee">Point d'arrivée</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="date_heure" type="datetime-local" name="date_heure" required>
                                <label for="date_heure">Date et Heure</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-block" type="submit">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'includes/footer.php'; ?>
</body>
</html>
