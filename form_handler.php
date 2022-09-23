<?php

$name=$_POST["username"];
$user_email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];

$email_from="info@practified.com";
$email_subject="New comment";
$email_body="name : ".$name."\n".
            "visitor mail: ".$user_email."\n".
            "subject : ".$subject."\n".
            "message :".$message."\n";

$to="satishbevara123@gmail.com";
$headers="From : $email_from \r\n";
$headers .="Reply-to : $user_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: index.html");
?>

