<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "galihadityya12@gmail.com";
    $subject = "New Contact Form Submission";
    
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message";
    
    $headers = "From: $email\r\n";
    
    mail($to, $subject, $email_content, $headers);
    
    // Return success response
    echo json_encode(["status" => "success"]);
    exit;
}
?>