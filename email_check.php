<?php

$to_email = $email;
$subject = "Form Submission";
$msg="Name: ".$name."\n"."Email: ".$email."\n"."Age: ".$age."\n"."Gender: ".$sex;
$headers = "From: webpagea44@gmail.com";

if (mail($to_email, $subject, $msg, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>