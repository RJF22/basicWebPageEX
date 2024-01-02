<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "ryanjfinazzo@gmail.com";  // Replace with your email address
    $subject = "New Contact Form Submission";

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n\n";
    $mailBody .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $mailBody, $headers);
}
?>