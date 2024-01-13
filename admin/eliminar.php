<?php
session_start();
include "php/conexionBD.php";
$boleta = $_GET['boleta'];
$query_datos = "DELETE FROM `alumno` WHERE `boleta`=$boleta;";
$resultado = mysqli_query($conexion, $query_datos); 
if($resultado)
{
    header("Location: dashboard.php?boleta=$boleta");             
}
?>