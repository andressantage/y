<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost:3307", "root", "", "api");

// Verificar la conexión
if (mysqli_connect_errno()) {
  echo "Error al conectar a la base de datos: " . mysqli_connect_error();
  exit();
}

//obtencion de valores del formulario
$email=$_POST['email'];
$password=$_POST['password'];

// Insertar el contenido en la tabla
$query = "INSERT INTO prueba (correo,contra) VALUES('$email','$password')";
if (mysqli_query($conexion, $query)) {
  header("location:principal.php");/* echo "Contenido guardado correctamente."; */
} else {
  echo "Error al guardar el contenido: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>
