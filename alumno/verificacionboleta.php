<?php
session_start();
include "php/conexionBD.php";
$nombre = $_POST['nombre']; $_SESSION['nombre'] = $nombre;
$apellidoP = $_POST['apellidoPaterno']; $_SESSION['apellidoPaterno'] = $apellidoP;
$apellidoM = $_POST['apellidoMaterno']; $_SESSION['apellidoMaterno'] = $apellidoM;
$curp = $_POST['curp']; $_SESSION['curp'] = $curp;
$boleta = $_POST['boleta']; $_SESSION['boleta'] = $boleta;
$fechaN = $_POST['fechaNacimiento']; $_SESSION['fechaNacimiento'] = $fechaN;
$genero = $_POST['genero']; $_SESSION['genero'] = $genero;
//Contacto
$calle = $_POST['calle']; $_SESSION['calle'] = $calle;
$numero = $_POST['numero']; $_SESSION['numero'] = $numero;
$colonia = $_POST['colonia']; $_SESSION['colonia'] = $colonia;
$alcaldia = $_POST['alcaldia']; $_SESSION['alcaldia'] = $alcaldia;
$CP = $_POST['CP'];  $_SESSION['CP'] = $CP;
$telefono = $_POST['telefono']; $_SESSION['telefono'] = $telefono;
$email = $_POST['email']; $_SESSION['email'] = $email;
//Procedencia
$escuela = $_POST['escuela']; $_SESSION['escuela'] = $escuela;
$estado = $_POST['estado']; $_SESSION['estado'] = $estado;
$nEscuela = $_POST['Nescuela']; $_SESSION['Nescuela'] = $nEscuela;
$promedio = $_POST['promedio']; $_SESSION['promedio'] = $promedio;
$opEsc = $_POST['opcionEscom']; $_SESSION['opcionEscom'] = $opEsc;

$query_datos = "SELECT * FROM `alumno` WHERE boleta='$boleta';";
$resultado = mysqli_query($conexion, $query_datos);
if (mysqli_num_rows($resultado) == 1) {
    echo json_encode(array('error' => true, 'boleta' => $boleta));
    exit();
}
else
{
    echo json_encode(array('error' => false));
    exit();
}
?>