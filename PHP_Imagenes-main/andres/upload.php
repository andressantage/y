<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "uploads/";
    $title = $_POST['co']; 

    $target_file1 = $target_dir . basename($_FILES["image"]["name"]);

    $imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));

    $target_file = $target_dir . $title . "." . $imageFileType;
    // "_" . basename($_FILES["image"]["name"]);

/*     //datos para la conexion
    $con=mysqli_connect("localhost:3307","root","123","cont");

    $consulta="INSERT INTO img VALUES('$target_file')";
    $resultado=mysqli_query($con,$consulta);
    mysqli_close($con); */

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        /* header("location: ../adj.php"); */
         header("location: index.html");
    } else {
        echo "Ocurrió un error al subir el archivo.";
    }
}
?>
