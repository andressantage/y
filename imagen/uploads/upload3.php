<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "uploads/";
    $target_filo = $target_dir . $_POST['a1'] . "_" . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $target_file = $target_dir . $_POST['a1'] . "." . $imageFileType;
    $uploadOk = 1;
    

    // Verificar si el archivo es una imagen
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            echo "El archivo es una imagen - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "El archivo no es una imagen.";
            $uploadOk = 0;
        }
    }

    // Verificar si el archivo ya existe
    if (file_exists($target_file)) {
        echo "El archivo ya existe.";
        $uploadOk = 0;
    }

  /*   // Verificar el tamaño máximo del archivo (opcional)
    $maxFileSize = 500000; // Tamaño máximo en bytes
    if ($_FILES["image"]["size"] > $maxFileSize) {
        echo "El archivo es demasiado grande. Tamaño máximo permitido: " . $maxFileSize . " bytes.";
        $uploadOk = 0;
    }
 */
 /*    // Permitir solo ciertos formatos de archivo (opcional)
    $allowedFileTypes = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedFileTypes)) {
        echo "Solo se permiten archivos JPG, JPEG, PNG y GIF.";
        $uploadOk = 0;
    } */

    // Verificar si $uploadOk es igual a 0 por algún error
    if ($uploadOk == 0) {
        echo "El archivo no se pudo subir.";
    } else {
        // Intentar subir el archivo
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "El archivo se ha subido correctamente.";
        } else {
            echo "Ocurrió un error al subir el archivo.";
        }
    }
}
?>
