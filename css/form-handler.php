<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $POST['subject'];
$message = $POST['message'];

$email_from='sakshi0606@gmail.com';

$email_subject ='New Form Submission';

$email_body = "User Name: $name.\n"
                 "User Email: $visitor_email.\n"
                   "Subject: $visitor_email.\n"
                     "User Message: $message.\n"

 $to ='sakshisingh6003lku@gmail.com';               
 
 $headers = "From: $email_from\r\n";

 $header = "Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: Contact.html");
?>