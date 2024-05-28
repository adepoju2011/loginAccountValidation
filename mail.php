<?php
//get data from form  
$name = $_POST['Name'];
$email= $_POST['Email'];

$to = "Michelleannsmith965@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email;
$headers = "From: noreply@connectus.website";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:QR.html");
?>