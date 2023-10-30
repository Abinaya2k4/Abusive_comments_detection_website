<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set your email address where you want to receive the messages
    $to = "yuthikshaamanickam@gmail.com";
    $subject = "New Contact Form Submission from $name";
    $headers = "From: $email";

    // Construct the email body
    $email_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send the email
    $mail_result = mail($to, $subject, $email_body, $headers);

    if ($mail_result) {
        // Email sent successfully
        echo "Thank you for contacting us. Your message has been sent.";
    } else {
        // Email sending failed
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // Handle form submission error
    echo "Form submission error. Please try again.";
}
?>
