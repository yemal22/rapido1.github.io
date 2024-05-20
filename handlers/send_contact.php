<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once 'config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    $errors = [];
    if (empty($name)) {
        $errors[] = 'Le nom est requis.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'L\'email est invalide.';
    }
    if (empty($subject)) {
        $errors[] = 'Le sujet est requis.';
    }
    if (empty($message)) {
        $errors[] = 'Le message est requis.';
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    } else {
        $mail = new PHPMailer(true);


        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Remplacez par votre serveur SMTP
            $mail->SMTPAuth = true;
            $mail->Username = 'yemalem03@gmail.com'; // Remplacez par votre adresse email
            $mail->Password = 'zaxgphbltyydzmvd'; // Remplacez par votre mot de passe
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Paramètres du mail
            $mail->setFrom($email, $name);
            $mail->addAddress('yemalem03@gmail.com'); // Remplacez par votre adresse email de destination

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = "
            <h2>Nouveau message de contact</h2>
            <p><strong>Nom:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Sujet:</strong> $subject</p>
            <p><strong>Message:</strong><br>$message</p>
            ";

            $mail->send();
            echo "<p style='color: green;'>Votre message a été envoyé avec succès.</p>";
        } catch (Exception $e) {
            echo "<p style='color: red;'>Une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer plus tard.</p>";
            echo "<p style='color: red;'>Mailer Error: {$mail->ErrorInfo}</p>";
        }
    }
}
?>
