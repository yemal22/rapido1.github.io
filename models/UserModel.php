<?php

class UserModel {
    public function getUserById($user_id) {
        include_once 'config/config.php';
        $sql = "SELECT * FROM utilisateurs WHERE id = ?";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
