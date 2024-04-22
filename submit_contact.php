<?php
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject= "my name is $name";
    // Admin email (change this to your own email address)
    $admin_email = 'hitparker123@gmail.com';
    // Create email headers
    $headers = 'From: ' . $email;
    
    // Send email
    if (mail($admin_email, $subject, $message, $headers)) {
        header("location:contact.html");
        exit();
    } else {
        $error_message = "Failed to send your message. Please try again later.";
        
    }

?>