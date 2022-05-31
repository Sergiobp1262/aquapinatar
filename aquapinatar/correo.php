<?php
    $destinatario = 'sergiobp1262@gsmail.com'
    
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde la página AquaPinatar";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $telefono, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\location.href='contacto.php'\",1000)</script>";
    
    
?>