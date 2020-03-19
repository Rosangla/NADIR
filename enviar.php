<?php
$destino = "rosabalam.1990@gmail.com";
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$contenido = "Nombre:" . $nombre . "\nAsunto:" . $asunto . "\nCorreo:" . $email . "\nTeléfono:" . $telefono . "\nMensaje:" . $mensaje;
if (mail ($destino, "Contacto", $contenido)){
echo "<script type=\"text/javascript\">alert('Se ha enviado el mensaje'); window.location='index.html';</script>";
}else{
echo "<script type=\"text/javascript\">alert('Hubo un problema al enviar el mensaje'); window.location='index.html';</script>";

}

/*if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['telefono']) && !empty($_POST['telefono']) && isset($_POST['correo']) && !empty($_POST['correo']) && isset($_POST['asunto']) && !empty($_POST['asunto']) && isset($_POST['mensaje']) && !empty($_POST['mensaje']))
{
$para = 'rosabalam.1990@gmail.com';
$desde = "From:"."CodigoFacilito";
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
mail ($para,$nombre,$telefono,$email,$asunto,$mensaje,$desde);
echo "Correo enviado...";
}else{
    echo "Problemas al enviar";
}*/


/*$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$cuerpoMSG = $nombre.'----'.$telefono.'-----'.$email.'-----'.$sunto'-----'.$mensaje;



if (mail ("rosabalam.1990@gmail.com", $asunto, $nombre, $telefono, $cuerpoMSG, $email, $mensaje)){
echo "Se envió 1";
}else{
echo "No se envió 1";*/

/*$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$cuerpoMSG = $asunto.'----'.$telefono.'-----'.$nombre.'-----'.$mensaje;


if (mail ("rosabalam.1990@gmail.com", $asunto,$cuerpoMSG, $email, $mensaje)){
echo "Se envió 1";
}else{
echo "No se envió 1";
}*/


/*$header = 'From:' . $email . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por el siguiente asunto" . $asunto . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . "\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . "\r\n";
$para = 'rosabalam.1990@gmail.com';

if (mail ($para, $asunto, $telefono, $email, $mensaje)){
    echo "Se envió";
}else{
    echo "No se envió";

}*/

/*
$email = "rosabalam.1990@gmail.com";
$nombre = 'Test v2 mejorando el cuerpo del msn';
$telefono = '9911xxxxx';
$direccion = 'calle ---xxxx No----';
$mensaje = 'ola ke ase programando o ke ase';
$cuerpoMSG = $asunto.'----'.$telefono.'-----'.$direccion.'-----'.$mensaje;


if (mail ("rosabalam.1990@gmail.com", $asunto,$cuerpoMSG, $email, $mensaje)){
echo "Se envió 1";
}else{
echo "No se envió 1";
}*/
?>