<?php
session_start();

// Verificar si se ha enviado el formulario
if (isset($_POST['submit'])) {
    // Establecer el mensaje en la sesión
    $_SESSION['mensaje'] = "¡Esto es una alerta desde 2.php!";
    // Redireccionar de vuelta a index.php
    header("Location: index.php");
    exit();
}
?>
