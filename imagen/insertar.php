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

session_start();
$_SESSION['email'] = $email;

$consulta = "SELECT * FROM usuarios WHERE correo='$email' AND contra='$password'";
$resultado = mysqli_query($con, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    mysqli_free_result($resultado);
    mysqli_close($con);
    header("Location: principal.php");
    exit();
} else {
    mysqli_free_result($resultado);
    mysqli_close($con);
    include("loginerror.php");
}
?>

