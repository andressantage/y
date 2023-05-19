<?php
//obtencion de valores del formulario
$a1 = $_POST['a1'];

$titulo








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
  echo 'Respuesta del servidor: ';
  print_r($response);
}

?>