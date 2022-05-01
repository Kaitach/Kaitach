<?php
$nombre = $_POST['nombre'];
$Email = $_POST['Email'];
$Telefono = $_POST['Telefono'];
$Consulta = $_POST['Consulta'];

$header = 'From: ' . $Email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$message .= "Su e-mail es: " . $Email . " \r\n";
$message .= "Teléfono de contacto: " . $Telefono . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'franco.torres1705@gmail.com';
$asunto = 'Mensaje de Broparadores ';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>
-->
