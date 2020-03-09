<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" Da: $name \n Messaggio: $message";
$recipient = "bonaccolto90@hotmail.it";
$subject = "Form dei contatti";
$mailheader = "Da: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Errore!");
echo "Messaggio inviato!" . " - " . "<a href='index.html#contact' style='text-decoration:none;color:#ff0099;'>Ritorna</a>";
?>
