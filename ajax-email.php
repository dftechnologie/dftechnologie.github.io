<?php

/* SETTINGS */
$yourEmail = "brice@dftechnologie.com";
$emailSubject = "Contact Form";

if($_POST){

  /* DATA FROM HTML FORM */
  $name = $_POST['name'];
  $society = $_POST['society'];
  $siret = $_POST['siret'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $headers = "From: $name <$email>\r\n" .
             "Reply-To: $name <$email>\r\n" . 
             "Subject: $emailSubject\r\n" .
             "Content-type: text/plain; charset=UTF-8\r\n" .
             "MIME-Version: 1.0\r\n" . 
             "X-Mailer: PHP/" . phpversion() . "\r\n";

  /* SEND EMAIL */
  mail($yourEmail, $emailSubject, $society, $siret, $message, $headers);
}
?>