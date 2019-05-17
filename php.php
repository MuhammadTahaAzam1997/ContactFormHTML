<?php
$name = $_Post['name'];
$visitor_email=$_POST['email'];
$message = $_POST['message'];

$email_from="MuhammadTahaAzam@gmail.com";
$email_subject="New form Submission";
$email_body="User name: $name.\n".
            "User Email: $visitor.\n".
            "User Message: $message.\n";

$to ="MuhammadTahaAzam@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
?>