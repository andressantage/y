<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<dialog id="miDialogo">
    <h2>Título del Cuadro de Diálogo</h2>
    <p>Contenido del Cuadro de Diálogo.</p>
    <button onclick="cerrarDialogo()">Cerrar</button>
</dialog>
    
<form method="POST">
    <div class="form-group  text-white">
        <label for="email">Correo electrónico</label>
        <input required type="email" class="form-control" name="email" id="email" placeholder="Ingresa tu correo electrónico">
    </div>
    <div class="form-group  text-white">
        <label for="password">Contraseña</label>
        <input required type="password" class="form-control" name="password" id="password" placeholder="Ingresa tu contraseña">
    </div>
    <button type="submit" class="btn btn-success">Iniciar sesión</button>
    <div class="d-flex justify-content-lg-start align-item-center mt-2">
        <a href="" class="m">¿Has olvidado tu contraseña?</a>
    </div>
</form>
<script>
function mostrarDialogo() {
        var dialogo = document.getElementById("miDialogo");
        dialogo.showModal();
    }

function cerrarDialogo() {
    var dialogo = document.getElementById("miDialogo");
    dialogo.close();
}
<?php
// Conexión a la base de datos
$con = mysqli_connect("localhost:3307", "root", "", "api");

// Verificar la conexión
if (mysqli_connect_errno()) {
    echo "Error al conectar a la base de datos: " . mysqli_connect_error();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtención de valores del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

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
        echo("mostrarDialogo();");

    }
}
?>
</script>

</body>
</html>
