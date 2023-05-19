<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM caddie  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: listaCaddies.php");
    }
    $row=mysqli_fetch_array($query);
?>
