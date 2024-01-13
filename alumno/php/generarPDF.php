<?php
// FPDF library
    session_start();
    require('fpdf185/fpdf.php');
    include "conexionBD.php";
//DATOS POR POST
    $nombre = $_SESSION['nombre'];
    
    $apellidoP = $_SESSION['apellidoPaterno'];
    $apellidoM = $_SESSION['apellidoMaterno'];
    $curp = $_SESSION['curp'];
    $nBoleta = $_SESSION['boleta'];
    $fechaN = $_SESSION['fechaNacimiento'];
    $genero = $_SESSION['genero'];
    //Contacto
    $calle = $_SESSION['calle'];
    $numero = $_SESSION['numero'];
    $colonia = $_SESSION['colonia'];
    $alcaldia = $_SESSION['alcaldia'];
    $CP = $_SESSION['CP'];
    $telefono = $_SESSION['telefono'];
    $email = $_SESSION['email'];
    //Procedencia
    $escuela = $_SESSION['escuela'];
    $estado = $_SESSION['estado'];
    $nEscuela = $_SESSION['Nescuela'];
    $promedio = $_SESSION['promedio'];
    $opEsc = $_SESSION['opcionEscom'];
    
    $nBoleta = $_SESSION['boleta'];
    $query_horarios = "SELECT `laboratorio_asignado`,`horario_asignado` FROM `alumno` WHERE `boleta`='$nBoleta';";
    $resultado = mysqli_query($conexion,$query_horarios);
    $datos = mysqli_fetch_array($resultado);
    $laboratorio = $datos['laboratorio_asignado'];
    $horario = $datos['horario_asignado'];
  //Obtenindo la información del form por POST
  //Identidad
$fpdf = new FPDF;
$fpdf->AddPage('PORTRAIT', 'LETTER');
$fpdf->Image('img/logo_ipn.png', 8, 11, 33, 33);
$fpdf->Image('img/escudoESCOM.png', 169, 14.5, 33, 25);
$fpdf->SetFont('Times', 'B', 26);
$fpdf->SetTextColor(104, 36, 68);
$fpdf->Multicell(0, 12, utf8_decode('Instituto Politécnico Nacional'), 0, 'C', 0);
$fpdf->SetFont('Times', 'B', 22);
$fpdf->Multicell(0, 12, utf8_decode('Escuela Superior de Cómputo'), 0, 'C', 0);

/* Bienvenida a los alumnos*/

$fpdf->SetFont('Arial', 'B', 16);
$fpdf->SetTextColor(0, 76, 153);
$fpdf->Multicell(0, 12, utf8_decode('¡Bienvenido a ESCOM!'), 0, 'C', 0);
$fpdf->Ln(-5);
$fpdf->SetTextColor(0, 0, 0);



/*Contenido delfpdf*/
$fpdf->Ln(10);
$fpdf->SetFont('Arial', 'B', 16);
$fpdf->Multicell(0, 12, utf8_decode('Información registrada'), 0, 'C', 0);
$fpdf->Ln(5);
$fpdf->SetFont('Arial', '', 14);
$fpdf->Cell(55, 8, utf8_decode('Datos del alumno:'), 1, 0, 'C');
$fpdf->Ln(15);
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(55, 6, "Nombre:", 0);
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(10, 6, utf8_decode($nombre));

$fpdf->SetFont('Arial', '', 12);
//$fpdf->Cell(115, 6, "$nombre", 0);
$fpdf->Ln();
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(55, 6, 'Apellido Paterno:', 0);
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(10, 6, utf8_decode($apellidoP));
$fpdf->Ln();
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(55, 6, 'Apellido Materno:', 0);
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(10, 6, utf8_decode($apellidoM));
$fpdf->Ln();
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(55, 6, utf8_decode('Correo electrónico:'), 0);
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(10, 6, utf8_decode($email));
$fpdf->Ln();
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(55, 6, utf8_decode('Boleta:'), 0);
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(10, 6, utf8_decode($nBoleta));
$fpdf->Ln();
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(55, 6, utf8_decode('Horario:'), 0);
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(115, 6, utf8_decode(substr($horario,11,-3)), 0);
$fpdf->Ln();
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(55, 6, utf8_decode('Laboratorio:'), 0);
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(115, 6, utf8_decode(substr($laboratorio,-1)), 0);
$fpdf->Ln(130);
/*Footer*/
$fpdf->SetX(-25);
$fpdf->SetFont('Arial', 'I', 8);
$fpdf->Cell(0, 10, utf8_decode('Página ') . $fpdf->PageNo());
$fpdf->OutPut();


?>