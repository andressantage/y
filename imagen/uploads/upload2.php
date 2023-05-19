<?php

$target_dir = "uploads/";
$target_file = $target_dir . $_POST['a1'] . "_" . basename($_FILES["image"]["name"]);

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "El archivo se ha subido correctamente.";
} else {
    echo "Ocurrió un error al subir el archivo.";
}

?>