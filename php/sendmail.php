<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// 🔥 CORRECT PATH (based on your folder)
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';
require '../PHPMailer-master/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // GET FORM DATA
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $mobile     = $_POST['mobile'];
    $city       = $_POST['city'];
    $state      = $_POST['state'];
    $message    = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // 🔥 SMTP SETTINGS
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'YOUR_EMAIL'; // 🔁 CHANGE THIS
        $mail->Password   = 'YOUR_APP_PASSWORD';   // 🔁 APP PASSWORD
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // EMAIL SETUP
       $mail->setFrom('YOUR_EMAIL', 'Kriaa Interiors');
        $mail->addAddress('YOUR_EMAIL');

        // CONTENT
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';

        $mail->Body = "
        <h3>New Contact Request</h3>
        <b>Name:</b> $first_name $last_name <br>
        <b>Email:</b> $email <br>
        <b>Mobile:</b> $mobile <br>
        <b>City:</b> $city <br>
        <b>State:</b> $state <br>
        <b>Message:</b> $message
        ";

        $mail->send();

        echo "<script>alert('Message Sent Successfully!'); window.location.href='../php/contactus.php';</script>";

    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}
?>