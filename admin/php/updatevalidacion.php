<?php
    include('conexionBD.php');
     //Obtenindo la información del form por POST
     //Identidad
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoPaterno']; 
    $apellidoM = $_POST['apellidoMaterno'];
    $curp = $_POST['curp']; 
    $boleta = $_POST['boleta']; 
    $fechaN = $_POST['fechaNacimiento']; 
    $genero = $_POST['genero']; 
    //Contacto
    $calle = $_POST['calle']; 
    $numero = $_POST['numero']; 
    $colonia = $_POST['colonia']; 
    $alcaldia = $_POST['alcaldia']; 
    $CP = $_POST['CP']; 
    $telefono = $_POST['telefono']; 
    $email = $_POST['email']; 
    //Procedencia
    $escuela = $_POST['escuela']; 
    $estado = $_POST['estado']; 
    $nEscuela = $_POST['Nescuela'];
    $promedio = $_POST['promedio'];
    $opEsc = $_POST['opcionEscom']; 
    $lab = $_POST['lab'];
    $horario = $_POST['opcionHora'];
    //La opción seleccionada se le da el valor

    switch($opEsc)
    {
        case "Primera opción": $opEsc = 1; break;
        case "Segunda opción": $opEsc = 2; break;
        case "Tercera opción": $opEsc = 3; break;
        case "Otra opción": $opEsc = 4; break;
    }
    if($horario == 8) {
    $query_update = "UPDATE `alumno` SET `nombre`='$nombre',`apellido_paterno`='$apellidoP',`apellido_materno`='$apellidoM',`fecha_nacimiento`='$fechaN',`genero`='$genero',`curp`='$curp',`calle`='$calle',`numero`='$numero',`colonia`='$colonia',`alcaldia`='$alcaldia',`cp`='$CP',`telefono`='$telefono',`email`='$email',`escuela_procedencia`='$nEscuela',`estado`='$estado',`promedio`='$promedio',`numero_opcion`='$opEsc',`laboratorio_asignado`='lab_$lab',`horario_asignado`='2023-02-02 0$horario:00:00' WHERE `boleta`='$boleta'";
    $resultado = mysqli_query($conexion,$query_update);
    echo "hora 1";
    }
    elseif($horario == 9)
    {
        $query_update = "UPDATE `alumno` SET `nombre`='$nombre',`apellido_paterno`='$apellidoP',`apellido_materno`='$apellidoM',`fecha_nacimiento`='$fechaN',`genero`='$genero',`curp`='$curp',`calle`='$calle',`numero`='$numero',`colonia`='$colonia',`alcaldia`='$alcaldia',`cp`='$CP',`telefono`='$telefono',`email`='$email',`escuela_procedencia`='$nEscuela',`estado`='$estado',`promedio`='$promedio',`numero_opcion`='$opEsc',`laboratorio_asignado`='lab_$lab',`horario_asignado`='2023-02-02 0$horario:45:00' WHERE `boleta`='$boleta'";
        $resultado = mysqli_query($conexion,$query_update);
        echo "hora 2";
    }
?>