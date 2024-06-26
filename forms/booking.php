<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $property = $_POST['property'];
    $message = $_POST['message'];
    $avatar = $_POST['avatar'];
    
    // Set the recipient email address
    $to = "nusaibasafants@gmail.com"; // Change this to your desired email address
    
    // Set the email subject
    $subject = "New Real Estate Booking";
    
    // Construct the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone Number: $phone\n";
    $email_message .= "Property of Interest: $property\n";
    $email_message .= "Message:\n$message\n";
    
    // Send the email
    if (mail($to, $subject, $email_message)) {
        echo "Thank you for your booking. We will contact you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // Handle the case if the form is not submitted properly
    echo "Oops! Invalid form submission.";
}

?>
