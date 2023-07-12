<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $header = 'From: ' . $mail . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $message = "Este mensaje fue enviado por: " . $name . " \r\n";
    $message .= "Su e-mail es: " . $mail . " \r\n";
    $message .= "Su ciudad es: " . $city . " \r\n";
    $message .= "Teléfono de contacto: " . $phone . " \r\n";
    $message .= "Mensaje: " . $_POST['message'] . " \r\n";
    $message .= "Enviado el: " . date('d/m/Y', time());

    $para = 'contacto@motiontech.com.mx';
    $asunto = 'Mensaje de Formulario Web';

    mail($para, $asunto, utf8_decode($message), $header);
    header("Location:./html/contacto.html");

?>
