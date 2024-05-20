<?php
include_once 'config.php';

$sql = "INSERT INTO chauffeurs(nom, prenom, telephone, sexe, disponible) VALUES
('test', 'test', '0000000', 'M', 1),
('KOFFI', 'Yvon', '70548761', 'M', 1),
('GBONOU', 'Pamphile', '71121911', 'M', 1),
('Grey', 'John', '76625862', 'M', 1),
('Dupont', 'Jean', '76629262', 'M', 1),
('Evil', 'Grace', '76629261', 'F', 1),
('Tom', 'Merveille', '76629260', 'F', 1);
";

$req = $connexion->prepare($sql);

try {
    $req->execute();
    echo 'Insertion réussir';
} catch (PDOException $e) {
    echo 'Insertion impossible: '. $e->getMessage();
}