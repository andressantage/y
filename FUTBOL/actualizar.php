<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM caddie WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Caddie</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/formulario.css">
</head>
<body style="text-align: center">
<header>
<div class="header">
			<h1>SISTEMA DE CONTROL ADMINISTRATIVO</h1>
			</div>
		<nav>
			<ul>
				<li><a href="index.php">INICIO</a></li>
				<li class="principal">
					<a href="#">CADDIES</a>
					<ul>
						<li><a href="caddie.php">Agregar caddie</a></li>
						<li><a href="listaCaddies.php">Lista de caddies</a></li>
					</ul>
				</li>
				<li class="principal">
					<a href="#">USUARIOS</a>
					<ul>
						<li><a href="agregarUsu.php">Agregar Usuraio</a></li>
						<li><a href="listaUsu.php">Lista de Usuarios</a></li>
					</ul>
				</li>
                <li class="principal">
					<a href="#">TORNEO</a>
					<ul>
						<li><a href="configurar.php">Configurar torneo</a></li>
						<li><a href="canchas.php">Canchas</a></li>
					</ul>
				</li>
				<li class="principal">
					<a href="#">PLANILLAS</a>
					<ul>
						<li><a href="listaPlanillas.php">Lista de planillas</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>

    <div class="Base-formulario" style="text-align: center">
        <div class="formulario">
        <h2 class="titulo-f"> DATOS DEL CADDIE</h2>
		
          <form action="update.php" method="POST">
		
          <label>Cedula:
		  <input name="id" type="hidden" value="<?php echo $row['id']  ?>" />
              
              <br>
              <input name="cedula" type="int" placeholder="cedula" value="<?php echo $row['cedula']  ?>" />
              <br/>

			   </label>
            <label>Nombre:
              <br>
              <input name="nombre" type="text" placeholder="nombre" value="<?php echo $row['nombre']  ?>" /> 
            <br/></label>
            <label>Apellido: 
              <br>
              <input name="apellido" type="text" placeholder="apellido" value="<?php echo $row['apellido']  ?>" />
              <br/></label>
            <input type="submit" value="Editar"/>

			</form>
</body>
</html>
