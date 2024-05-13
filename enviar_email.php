<?php
// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Configurar el correo electrónico
$para = "maxrmz2004xd@gmail.com";
$asunto = "Mensaje de contacto desde el sitio web";
$mensajeCorreo = "Nombre: $nombre\n";
$mensajeCorreo .= "Correo electrónico: $email\n";
$mensajeCorreo .= "Mensaje:\n$mensaje\n";
$headers = "From: $nombre <$email>";

// Enviar el correo electrónico
if (mail($para, $asunto, $mensajeCorreo, $headers)) {
  echo "<p>¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.</p>";
} else {
  echo "<p>Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.</p>";
}
?>
