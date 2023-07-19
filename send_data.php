<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $group_link = $_POST["group_link"];
    $bot = $_POST["bot"];

    // Customize the email subject and recipient address
    $subject = "New $bot Bot Submission";
    $recipient = "ronensingha85@gmail.com"; // Replace with your email address

    // Email content
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "WhatsApp Group Link: $group_link\n";
    $message .= "Bot: $bot\n";

    // Send the email
    if (mail($recipient, $subject, $message)) {
        // Email sent successfully
        echo "Thank you for submitting the form. We will add the bot to your WhatsApp group soon.";
    } else {
        // Email sending failed
        echo "Failed to submit the form. Please try again later.";
    }
} else {
    // If accessed directly, redirect to the respective bot page
    header("Location: {$_SERVER['HTTP_REFERER']}");
}
?>
