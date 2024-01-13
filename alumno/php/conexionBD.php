<?php
    $conexion = new mysqli("localhost", "root", "", "alumnos_escom");
    if ($conexion->connect_errno) {
        die("La conexion ha fallado" . $conexion->connect_errno);
    }
?>