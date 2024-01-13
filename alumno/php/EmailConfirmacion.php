<?php
    include("phpMailer/class.phpmailer.php");
    include("phpMailer/class.smtp.php");
    //Obtenindo la información del form por POST
    //Identidad
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoPaterno'];
    $apellidoM = $_POST['apellidoMaterno'];
    $curp = $_POST['curp'];
    $nBoleta = $_POST['boleta'];
    $fechaN = $_POST['fechaNacimiento'];
    $genero = $_POST['genero'];
    //Contacto
    $calle = $_POST['calle'];
    $numero = $_POST['numero'];
    $colonia = $_POST['colonia'];
    $alcaldia = $_POST['alcaldia'];
    $CP = $_POST['codigoPostal'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    //Procedencia
    $escuela = $_POST['escuela'];
    $estado = $_POST['estado'];
    $nEscuela = $_POST['Nescuela'];
    $promedio = $_POST['promedio'];
    $opEsc = $_POST['opcionEscom'];
    
    
    $email_user = "alexisescom2002@gmail.com"; //Debes actualizar esta línea con tu información
    $email_password = "dqnotjntfimfxfjk"; //Debes actualizar esta línea con tu información
    $the_subject = "ESCOM | Confirmacion de tu registro";
    $address_to = $email; //Debes actualizar esta línea con tu información
    $from_name = "ESCOM";
    $phpmailer = new PHPMailer();
    // ---------- datos de la cuenta de Gmail -------------------------------
    $phpmailer->Username = $email_user;
    $phpmailer->Password = $email_password; 
    //-----------------------------------------------------------------------
    // $phpmailer->SMTPDebug = 1;
    $phpmailer->SMTPSecure = 'ssl';
    $phpmailer->Host = "smtp.gmail.com"; // GMail
    $phpmailer->Port = 465;
    $phpmailer->IsSMTP(); // use SMTP
    $phpmailer->SMTPAuth = true;
    $phpmailer->CharSet = 'multipart/alternative';
    $phpmailer->Encoding = 'base64';
    $phpmailer->setFrom($phpmailer->Username,$from_name);
    $phpmailer->AddAddress($address_to); // recipients email

    date_default_timezone_set('UTC'); //Universal Time Coordinated 
    date_default_timezone_set("America/Mexico_City");                                                                                                                                                                              
    
    $phpmailer->Subject = $the_subject;	
    
    $phpmailer->Body .="<h1 style='color:#3366ff;'> ".utf8_decode("Confirmación")." de registro de datos:</h1>";

    
    $phpmailer->Body .= "<h3>Estimado alumno: ".utf8_decode($nombre)." ".utf8_decode($apellidoP)." ".utf8_decode($apeliidoM).".</h3>";
    $phpmailer->Body .= "<h4><b>Fecha de ".utf8_decode("confirmación: ").date("d-m-Y H:i:s")."</b></h4>";
    $phpmailer->Body .= "<h4>".utf8_decode("Con el número de boleta: ").utf8_decode($nBoleta).".</h4>";
    $phpmailer->Body .= "<h4>".utf8_decode("Derivado de la solicitud de registro del formulario de la ESCOM, el sistema de ESCOM, envía un reporte de confirmación con el correo dado.")."</h4>";
    $phpmailer->IsHTML(true);
    $phpmailer->Send()
    
  ?>                                                                                 