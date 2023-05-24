<?php

// Conexión a la base de datos
$con = mysqli_connect("localhost:3307", "root", "", "api");

// Verificar la conexión
if (mysqli_connect_errno()) {
  echo "Error al conectar a la base de datos: " . mysqli_connect_error();
  exit();
}

//obtencion de valores del formulario
$email=$_POST['email'];
$password=$_POST['password'];

$consulta = "SELECT * FROM usuarios WHERE correo='$email' AND contra='$password'";
/* $resultado = mysqli_query($con, $consulta); */

/* $filas = mysqli_num_rows($resultado); */

$result = $con->query($consulta);

if ($result->num_rows === 1) {
    // Las credenciales son válidas, obtener el nombre de usuario
    $row = $result->fetch_assoc();
    $username = $row['nombre'];

    // Establecer variables de sesión
    session_start();
    $_SESSION['nombre'] = $username;

    // Redirigir al usuario a la página de bienvenida
    header("Location: index.php"); 
    exit();
} else {
  header("Location: principal.php?error=1");
}

// Cerrar la conexión a la base de datos
$con->close();
?>

