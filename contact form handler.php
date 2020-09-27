<?php
    $name = $_POST['name'];
    $visitor_email = $POST['email'];
    $message = $_POST['message'];

    $email_form = 'kenverdcunha74@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "user Name: $name.\n".
                   "User Email: $visitor_email.\n".
                    "User Message: $message.\n";

$to = "kenverdcunnha74@gmail.com";

$headers = "Form: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($To,$email_subject,$email_body,$headers);

header("loction: form.html");
?>