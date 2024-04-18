<?php
$destinatario = 'info@deoroverde.szmblog.es';
$asunto = '=?UTF-8?B?' . base64_encode('Pedido de tarjeta desde tu página web') . '?=';

// Datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$formato = $_POST['formato'];
$cantidad = $_POST['cantidad'];

// Convertir el mensaje a UTF-8
$nombre = utf8_decode($nombre);
$formato = utf8_decode($formato);

// Ruta temporal del archivo cargado
$archivo_temporal = $_FILES['archivo']['tmp_name'];

// Nombre original del archivo cargado
$nombre_archivo = $_FILES['archivo']['name'];

// Verificar el tamaño y el tipo de archivo
$extension_permitida = array('png', 'jpg', 'jpeg');
$tamaño_maximo = 2 * 1024 * 1024; // 2 megabytes

$archivo_info = pathinfo($nombre_archivo);
$extension_archivo = strtolower($archivo_info['extension']);

if (!in_array($extension_archivo, $extension_permitida) || $_FILES['archivo']['size'] > $tamaño_maximo) {
    header('Location: subida_error.php');
    exit();
}

// Dirección de correo electrónico del remitente
$remitente = $email;

// Construir el mensaje
$cuerpo_mensaje = "Nombre: $nombre\n";
$cuerpo_mensaje .= "Email: $email\n";
$cuerpo_mensaje .= "Formato de tarjeta: $formato\n";
$cuerpo_mensaje .= "Cantidad de tarjetas: $cantidad\n";

// Construir los encabezados del correo electrónico
$headers = "From: $remitente\r\n";
$headers .= "Reply-To: $remitente\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"".md5(time())."\"\r\n";

// Contenido del mensaje
$body = "--".md5(time())."\r\n";
$body .= "Content-Type: text/plain; charset=\"iso-8859-1\"\r\n";
$body .= "Content-Transfer-Encoding: 7bit\r\n";
$body .= "\r\n$cuerpo_mensaje\r\n";

// Adjuntar el archivo
$body .= "--".md5(time())."\r\n";
$body .= "Content-Type: application/octet-stream; name=\"$nombre_archivo\"\r\n"; /* Para enviar un archivo binario */
$body .= "Content-Transfer-Encoding: base64\r\n";
$body .= "Content-Disposition: attachment; filename=\"$nombre_archivo\"\r\n";
$body .= "\r\n".chunk_split(base64_encode(file_get_contents($archivo_temporal)))."\r\n";

// Enviar el correo electrónico
if (mail($destinatario, $asunto, $body, $headers)) {
    header('Location: subida_exito.php');
} else {
    header('Location: subida_error.php');
}
?>