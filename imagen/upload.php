<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost:3307", "root", "", "api");

// Verificar la conexión
if (mysqli_connect_errno()) {
  echo "Error al conectar a la base de datos: " . mysqli_connect_error();
  exit();
}

//obtencion de valores del formulario
$titulo = $_POST['title'];
$descripcion=$_POST['description'];
$palabras='palabra';

$target_dir = "uploads/";
$target_file = $target_dir . $title . "_" . basename($_FILES["image"]["name"]);

$link=$title . "_" . basename($_FILES["image"]["name"]);

$query = "INSERT INTO imagen (titulo, link, descripcion, palabras) VALUES('$titulo','$link','$descripcion','$palabras')";

/////////

$url = 'https://6460edfe185dd9877e33740e.mockapi.io/jugadores'; // URL de tu servidor de Mock API
$data = [
  'titulo' => $titulo,
  'link' => $link
];

$options = [
  'http' => [
    'method' => 'POST',
    'header' => 'Content-Type: application/json',
    'content' => json_encode($data)
  ]
];

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

if ($result === false) {
  // Manejar el error en caso de que la solicitud falle
  echo 'Error en la solicitud.';
} else {
  // Manejar la respuesta del servidor
  $response = json_decode($result, true);
  /* echo 'Respuesta del servidor: ';
  print_r($response); */
}

////////


if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file) and mysqli_query($conexion, $query)) {
  
header("location: principal.php");

} else {
    echo "Ocurrió un error al subir el archivo." . mysqli_error($conexion);;
}

// Cerrar la conexión
mysqli_close($conexion);
?>