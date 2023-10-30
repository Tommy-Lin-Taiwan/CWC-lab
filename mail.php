<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$mailheader = "From: ".$name."<".$email.">\r\n";

$recipient = "f7u23dg4e@gmail.com";

mail($recipient, "Web Form Submission", $message, $mailheader) or die("Error!");

echo"message send";


?>