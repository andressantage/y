<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost:3307", "root", "", "api");

// Verificar la conexión
if (mysqli_connect_errno()) {
  echo "Error al conectar a la base de datos: " . mysqli_connect_error();
  exit();
}

//obtencion de valores del formulario
$nombre=$_POST['nombre'];
$numero=$_POST['numero'];
$fecha=$_POST['fecha'];
$email=$_POST['email'];
$password=$_POST['password'];

// Insertar el contenido en la tabla
$query = "INSERT INTO usuarios (nombre, correo,	contra,	fecha_nacimiento, celular, fecha_registro) VALUES('$nombre','$email','$password','$fecha','$numero',NOW())";
if (mysqli_query($conexion, $query)) {
  // Establecer variables de sesión
  session_start();
  $_SESSION['nombre'] = $nombre;
  header("location: index.php");/* echo "Contenido guardado correctamente."; */
} else {
  echo "Error al guardar el contenido: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>
