<?php
$name = $_POST['name'];
$prenom = $_POST['prenom'];
$tel = $_POST['tel'];
$mailFrom=$_POST['mail'];
$message = $_POST['message'];
$formcontent=" From: $name $prenom \n Tel:$tel \nMessage: $message";
$recipient = "amel.gor90@gmail.com";
$subject = "Contact Formulaire From: $mailFrom \r\n";
$mailheader = "From: $mailFrom \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Merci!" . " -" . "<a href='contact.html' style='text-decoration:none;color:#ff0099;'> Retour</a>";
?>
