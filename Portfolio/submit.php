<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form fields data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up email details
    $to = "nakaetekq@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send email
    if (mail($to, $subject, $body)) {
        // Email sent successfully
        echo "<p>Thank you for contacting us. We'll get back to you shortly!</p>";
    } else {
        // Email sending failed
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
}
?>
