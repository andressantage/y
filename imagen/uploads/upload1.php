<?php
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  //función basename() se utiliza para obtener el nombre del archivo de la ruta completa del archivo enviado a través del formulario.
  
/*   propiedades de la imagen
  name en el formulario de la imagen: image
  
  image tiene varias propiedades:
  - name: nombre del archivo imagen
  - type: tipo de archivo
  - tmp_name: ubicacion temporal del archivo
  
  enctype="multipart/form-data" //permite envio de archivos de tipo binario */

  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  //se utiliza para obtener la extensión del archivo que se está subiendo. 
  //PATHINFO_EXTENSION: indicar que solo se desea obtener la extensión del archivo.
  
  // Validar que el archivo sea una imagen
  //isset(): en PHP se utiliza para verificar si una variable está definida y no es nula. Toma uno o más parámetros y devuelve true si todos los parámetros están definidos y no son nulos, y false en caso contrario.
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
      $uploadOk = 1;
    } else {
      $uploadOk = 0;
      echo "File is not an image.";
    }
  }

  // Validar que el archivo no existe en el servidor
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Validar el tamaño del archivo
  if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Permitir sólo ciertos tipos de archivo
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  // Subir el archivo si todo está bien
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  } else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
?>
