<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $sender_email = $_POST['email'];
    $message = $_POST['message'];

    // Set the recipient email address (hidden from the sender)
    $recipient_email = "Labov@superimposer.net"; // Replace with your email address

    // Set email subject
    $subject = "New Message from Contact Form";

    // Compose the email body
    $email_body = "You have received a new message from: $sender_email\n\n";
    $email_body .= "Message:\n$message\n";

    // Set email headers
    $headers = "From: no-reply@superimposer.net"; // Replace with a no-reply email or your domain email

    // Send the email
    if (mail($recipient_email, $subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again.";
    }
}
?>
