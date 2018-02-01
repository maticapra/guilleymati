<?php 
error_reporting(0); 
$nombre = $_POST['name']; 
$correo_electronico= $_POST['email']; 
$opinion=$_POST['message']; 
$header = 'From: ' . $correo_electronico ."\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje .= "Este mensaje fue enviado por " . $nombre . " \r\n"; 
$mensaje .= "Su e-mail es: " . $correo_electronico . " \r\n"; 
$mensaje .="El mensaje es:".$_POST['message'] . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = "matias.cpr@gmail.com"; 
$asunto = 'Regalo de Casamiento'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

echo 'mensaje enviado correctamente'; 

?> 