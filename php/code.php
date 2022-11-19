<?php
$to = "ucachaca20@hotmail.com";
$subject = "Consulta web SuperBike";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$nombre = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$consulta = $_POST['consulta'];
$preferencia = $_POST['preferencia'];

$message = "
<html>
<head>
<title>Formulario de consultas</title>
</head>
<body>
<h1>Consulta en la web de SuperBike</h1>
<p>Nombre del usuario: $nombre </p> 
<p>Email: $email </p> 
<p>Telefono: $telefono </p> 
<p>Su consulta: $consulta </p> 
<p>¿Cómo prefiere que lo contactemos?: $preferencia </p> 
</body>
</html>";
 echo 'Gracias por comunicarse con nosotros';
mail($to, $subject, $message, $headers);
?>

