<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
</head>
<body>
   

    <h1>Index</h1>

    <form action="2.php" method="POST">
        <input type="submit" value="Mostrar alerta" name="submit">
    </form>
 <?php
    // Verificar si hay un mensaje en la sesión
    if (isset($_SESSION['mensaje'])) {
        // Mostrar el mensaje de alerta
        echo '<script>alert("' . $_SESSION['mensaje'] . '");</script>';
        // Eliminar el mensaje de la sesión para que no se muestre nuevamente
        //unset($_SESSION['mensaje']);
    }
    ?>



</body>
</html>
