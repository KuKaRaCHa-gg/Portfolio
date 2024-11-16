<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validation des champs
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Envoi de l'email (vous pouvez utiliser une bibliothèque comme PHPMailer)
        $to = "daniil.minevich2005@gmail.com";
        $subject = "Nouveau message de $name";
        $headers = "From: $email\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $emailBody = "
        <h2>Nouveau message reçu</h2>
        <p><strong>Nom:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong> $message</p>
        ";

        if (mail($to, $subject, $emailBody, $headers)) {
            echo "Message envoyé avec succès.";
        } else {
            echo "Erreur lors de l'envoi du message.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>
