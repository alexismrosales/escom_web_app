<?php
  include('conexionBD.php');
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

  //Se almacenaran los datos dependiendo disponibilidad de laboratorio y horarios

  //Se cambian los datos necesarios para no tener problemas al insertar datos en la base
  //En caso que haya puesto una escuela ajena al IPN
  if($nEscuela != "")
    $escuela = $nEscuela;
  //La opción seleccionada se le da el valor
  switch($opEsc)
  {
      case "Primera opción": $opEsc = 1; break;
      case "Segunda opción": $opEsc = 2; break;
      case "Tercera opción": $opEsc = 3; break;
      case "Otra opción": $opEsc = 4; break;
  }

  //Suponiendo que el primer horario comenzara a las 8:00
  //6 laboratorios
  $array_labs = array("lab_1", "lab_2", "lab_3", "lab_4", "lab_5", "lab_6");
  //Comenzará a buscar si hay horarios disponibles empezando desde el lab_1  

  foreach($array_labs as $lab)
  {
    //Busca los horarios con sus respectivas horas
    $consulta_cupos_lab = "SELECT HOUR(`horario_asignado`) AS 'Hora', COUNT(*) AS 'Cupos' FROM alumno WHERE laboratorio_asignado LIKE '%$lab%' GROUP BY  HOUR(`horario_asignado`) ORDER BY 'Hora' DESC;";
    $resultado = mysqli_query($conexion,$consulta_cupos_lab);
  
    //Crea arrays vacios para guardar la información
    $horario = array();
    $cupos = array();
    
    if(mysqli_num_rows($resultado) > 0)
    {
      
        while($fila = mysqli_fetch_assoc($resultado))
        {
          //Se obtienen los dos horarios disponibles en conjunto de sus cupos
          array_push($horario,$fila["Hora"]);
          array_push($cupos,$fila["Cupos"]);
        }
    }
     //Si hay cupos en el laboratorio se asignan los datos
     if($cupos[0] < 25 || empty($cupos[0]))//Primer horario                              
    {
      $consulta_insertar_datos = "INSERT INTO `alumno`(`boleta`, `nombre`, `apellido_paterno`, `apellido_materno`, `fecha_nacimiento`, `genero`, `curp`, `calle`, `numero`, `colonia`, `alcaldia`, `cp`, `telefono`, `email`, `escuela_procedencia`, `estado`, `promedio`, `numero_opcion`, `laboratorio_asignado`, `horario_asignado`) VALUES ('$nBoleta','$nombre','$apellidoP','$apellidoM','$fechaN','$genero','$curp','$calle','$numero','$colonia','$alcaldia','$CP','$telefono','$email','$escuela','$estado','$promedio','$opEsc','$lab','2023-02-02 08:00:00')";
      $resultado = mysqli_query($conexion,$consulta_insertar_datos);
      break;
    } 
   
    elseif($cupos[1] < 25)//Segundo horario
    {
      $consulta_insertar_datos = "INSERT INTO `alumno`(`boleta`, `nombre`, `apellido_paterno`, `apellido_materno`, `fecha_nacimiento`, `genero`, `curp`, `calle`, `numero`, `colonia`, `alcaldia`, `cp`, `telefono`, `email`, `escuela_procedencia`, `estado`, `promedio`, `numero_opcion`, `laboratorio_asignado`, `horario_asignado`) VALUES ('$nBoleta','$nombre','$apellidoP','$apellidoM','$fechaN','$genero','$curp','$calle','$numero','$colonia','$alcaldia','$CP','$telefono','$email','$escuela','$estado','$promedio','$opEsc','$lab','2023-02-02 09:45:00')";
      $resultado = mysqli_query($conexion,$consulta_insertar_datos);
      break;
    }
    //
    if ($lab == "lab_6")
      echo "NO hay cupos";
   }
echo 1;
  ?>