<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            height:200px;
            width:200px;
            margin: 4px;
        }
    </style>
    <script src="main.js" defer></script>
</head>
<body>
   
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input name="title" value="accomodate">accomodate</input>
        <input type="file" name="image">
        <input type="submit" value="Upload">
    </form>
    <?php
    $directorio = 'uploads/'; // Reemplaza con la ruta a tu carpeta de imágenes
        $uuu='C:/xampp/htdocs/imagen/';
    $archivos = scandir($directorio);
    foreach ($archivos as $archivo) {
        $extension = pathinfo($archivo, PATHINFO_EXTENSION);
        if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) { // Filtrar solo imágenes
            $rutaArchivo = $directorio . '/' . $archivo;
            $rutaArchivo1 = $uuu.$directorio . '/' . $archivo;
            echo '<img src="' . $rutaArchivo . '" alt="' . $archivo . '">';
            echo '<p>' . $rutaArchivo . '</p>    <p>' . $archivo . '</p>';
            echo '<a href="' . $rutaArchivo1 . '" >' . $archivo . '</a>';
        }
    }
    ?>
</body>
</html>