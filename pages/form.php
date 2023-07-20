<?php
//Conecto mi form
$nombre = $_POST["nombre"];
$mail = $_POST["email"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["textarea"];

$telefono = $_POST["telefono"];
$website = $_POST["website"];


//Mostrar texto plano
$header .= "Content-Type: text/plain";

//Como me va a llegar el msj enviado
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su email es: " . $mail . ",\r\n";
$mensaje .= "Asunto: " . $asunto . ",\r\n";
$mensaje .= "telefono: " . $telefono . ",\r\n";
$mensaje .= "website: " . $website . ",\r\n";
$mensaje .= "Mensaje: " . $_POST["mensaje"] . ",\r\n";
$mensaje .= "Enviado el: " . date('d/m/y', time());

$para = "luchob@gmail.com";
$asunto = "Mensaje de mi sitio web";

//Funcion mail
//a quien le mando el mail
mail($para, $asunto, utf8_decode($mensaje), $header);

//redireccion al haber enviado el form:
header("Location:exito.html");

?>