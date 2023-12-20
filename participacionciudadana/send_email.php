<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Verifica que el formulario se haya enviado con método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $subject = trim($_POST["emailSubject"]);
    $name = stripslashes(strip_tags(trim($_POST["username"])));
    $email = filter_var(trim($_POST["emailAddress"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["phoneNumber"]);
    $message = stripslashes(strip_tags(trim($_POST["emailMessage"])));

    // Verifica que el email proporcionado es válido
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El formato del correo electrónico no es válido.";
        exit;
    }

    // Define el correo del destinatario
    $to = 'leonardoagenciadigital97@gmail.com';

    // Construye el mensaje completo
    $fullMessage = "Nombre: $name\n";
    $fullMessage .= "Email: $email\n";
    $fullMessage .= "Teléfono: $phone\n\n";
    $fullMessage .= "Mensaje:\n$message\n";

    // Define los encabezados del correo
    $headers = "From: $name <$email>";

    // Intenta enviar el correo
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Tu respuesta ha sido enviada, se analizará y se te contestará por el mismo medio, gracias por tu aportación.";
    } else {
        echo "Lo sentimos, hubo un error al enviar tu mensaje.";
    }
} else {
    echo "El formulario debe ser enviado con método POST.";
}
?>
