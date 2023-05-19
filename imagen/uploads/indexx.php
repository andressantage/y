<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imágenes de la Carpeta</title>
    <style>
        img{
            height:200px;
            width:200px;
            margin: 4px;
        }
    </style>
</head>
<body>
    <?php
    $directorio = 'uploads/'; // Reemplaza con la ruta a tu carpeta de imágenes

    $archivos = scandir($directorio);
    foreach ($archivos as $archivo) {
        $extension = pathinfo($archivo, PATHINFO_EXTENSION);
        if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) { // Filtrar solo imágenes
            $rutaArchivo = $directorio . '/' . $archivo;
            echo '<img src="' . $rutaArchivo . '" alt="' . $archivo . '">';
        }
    }
    ?>
</body>
</html>
