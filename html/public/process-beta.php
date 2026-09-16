<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "daanpronk570@gmail.com";
    $subject = "Nieuwe Beta Aanmelding";
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    $message = "Nieuwe beta aanmelding van: " . $email;
    $headers = "From: " . $email;

    mail($to, $subject, $message, $headers);
    
    header("Location: beta.php?status=success");
    exit();
}