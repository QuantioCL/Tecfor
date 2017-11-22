<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
$fname = $_POST[utf8_encode('fname')];
$lname = $_POST[utf8_encode('lname')];
$telefono = $_POST[utf8_encode('telefono')]
$email = $_POST['email'];
$empresa = $_POST['empresa'];
$to = $_POST[utf8_encode('para')];
$subject = "Contacto Tecfor";
$msg = $_POST[utf8_encode('mensaje')];
$message = utf8_encode("
	 
$fname $lname se contactó con Tecfor.
Teléfono del contacto: $telefono

Mensaje:

$msg

--------------------------

Información de contacto:

$fname $lname
$empresa
$email

--------------------------


"); 
	 $headers = "From: $email"; 
	 
	 $spam = $_POST['proof'];
	 if($spam) {  
	 	print("No spam allowed."); 
	 } else {
	      $sent = mail($to, $subject, $message, $headers) ;   
	      if($sent){ 
	      	header('Location: http://www.tecfor.cl/contacto.php?status=success');
	      } else {
	      	header('Location: http://www.tecfor.cl/contacto.php?status=error');
	      }      
	 }
 }
 ?> 