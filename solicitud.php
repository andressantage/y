<?php
session_start();

if(!isset($_SESSION['nombre'])){
    header("Location: principal.php?error2=1");
    exit;
}
?>
