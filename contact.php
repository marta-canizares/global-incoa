<?php

// Llamando a los campos
$nombre = $_POST['name'];
$correo = $_POST['email'];
$subject = $_POST['subject'];
$mensaje = $_POST['message'];

// Datos para el correo
$destinatario = "marta.s.canizares@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Asunto: $subject \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);


?>
