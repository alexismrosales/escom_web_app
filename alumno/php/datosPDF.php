<?php
    include "conexionBD.php";
    $nBoleta = $_SESSION['boleta'];
    $query_horarios = "SELECT `laboratorio_asignado`,`horario_asignado` FROM `alumno` WHERE `boleta`='$nBoleta';";
    $resultado = mysqli_query($conexion,$query_horarios);
    $datos = mysqli_fetch_array($resultado);
    $laboratorio = $datos['laboratorio_asignado'];
    $horario = $datos['horario_asignado'];
?>
