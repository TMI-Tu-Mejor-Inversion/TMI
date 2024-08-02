<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$phone = $_POST["phone"];
$message = $_POST["message"];

$sheader = 'From: ' . $mail . " \r\n";
$sheader .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$sheader .= "Mime-Version: 1.0 \r\n";
$sheader .= "Content-Type: text/plain";

$message = "Mensaje enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Su número de teléfono es: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'montesdeocaortizaxelgabriel@gmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($message), $sheader);

header("Location:Contactanos.html");
?>
















<body>
        <h2>Contacto</h2>
    <div class="mb-3">
        <form action="enviar.php" method="post">
            <input type="text" id="nombre" name="name" placeholder="Ingrese su Nombre" required>
    
            <label for="email">Correo Electrónico:</label>
            <input type="text" id="email" name="mail" placeholder="Ingrese su Correo electrónico" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="phone" placeholder="Ingrese su Número telefónico">

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="message" rows="4" placeholder="Esccribanos un comentario!!" required></textarea>

            <input type="submit" value="Enviar">
      </div>
    </body>