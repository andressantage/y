<?php
function conectar(){
    $host="localhost:3307";
    $user="root";
    $pass="";
    $cont="api";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$cont);

    return $con;
}
?>