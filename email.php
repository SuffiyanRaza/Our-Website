<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $subject = "Thank you for subscribing!";
    $message = "We have received your email: " . $email;
    $headers = "From: no-reply@example.com";

    if (mail($email, $subject, $message, $headers)) {
        echo "Success";
    } else {
        echo "Error sending email";
    }
}
?>
