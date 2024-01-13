<?php
    session_start();
    if(empty($_SESSION['nombre']))
    {
        header("Location: invalido.php");
        die();
    }
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mata Chavez, Alexis ,Pedro , Peralta Romero">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!--JQUERY - AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!--Script ajax-->
    <script src="js/ConfirmacionDatos.js"></script>
    
    <title>ESCOM · Confirmación de datos</title>
  </head>
<body>
  <?php
    session_start();
        //Obtenindo la información del form por POST
      //Identidad
      
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
  ?>
  
  
      <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 py-5 text-center">
        <img class="logo" src="img/escudoESCOM.png" alt="" width="150" height="100">
        <div class="col-md-12">
          <br>
          <h2>Confirmación de datos</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 text-center">
      
          <div class="col-md-12">
            <p>Hola  <strong><span><?php echo $nombre ?> <?php echo $apellidoP ?>  <?php echo $apellidoM ?></span></strong>, verifica que los datos que ingresaste sean correctos: </p>
          </div>
        
          <!--IDENTIDAD-->
          <div class="col-md-12"><h3>Identidad</h3></div>
          <div class="col-md-12"><p> <strong>Curp: </strong> <?php echo $curp ?>.</p></div>
          
          <div class="col-md-12"><p> <strong>No de boleta: </strong> <?php echo $nBoleta ?>.</p></div>
          <div class="col-md-12"><p> <strong>Fecha de nacimiento: </strong> <?php echo $fechaN ?>.</p></div>
          <div class="col-md-12"><p> <strong>Género: </strong> <?php echo $genero ?>.</p></div>
          <!--CONTACTO-->
          <div class="col-md-12"><h3>Contacto</h3></div>  
          <div class="col-md-12"><p> <strong>Calle: </strong> <?php echo $calle ?>.</p></div>
          <div class="col-md-12"><p> <strong>Número: </strong> <?php echo $numero ?>.</p></div>
          <div class="col-md-12"><p> <strong>Alcaldia: </strong> <?php echo $alcaldia ?>.</p></div>
          <div class="col-md-12"><p> <strong>Codigo postal: </strong> <?php echo $CP ?>.</p></div>
          <div class="col-md-12"><p> <strong>Télefono o celular: </strong> <?php echo $telefono ?>.</p></div>
          <div class="col-md-12"><p> <strong>Correo electrónico: </strong> <?php echo $email ?>.</p></div>
          <!--PROCEDENCIA-->
          <div class="col-md-12"><h3>Procedencia</h3></div>
          <div class="col-md-12"><p> <strong>Escuela: </strong> <?php echo $escuela ?>.</p></div>
          <div class="col-md-12"><p> <strong>Estado: </strong> <?php echo $estado ?>.</p></div>
          <div class="col-md-12"><p> <strong>Nombre de la escuela: </strong> <?php echo $nEscuela ?>.</p></div>
          <div class="col-md-12"><p> <strong>ESCOM fue: </strong> <?php echo $opEsc ?>.</p></div>
          <!--SE ENCUENTRAN LOS FORMS QUE CONFIRMADO-->
          <form class="container" id="formConfirmado" method="POST">
            <form class="row">
          <div>
            <input type="hidden" name="nombre" value="<?php echo $nombre ?>">
            <input type="hidden" name="apellidoPaterno" value="<?php echo $apellidoP ?>">
            <input type="hidden" name="apellidoMaterno" value="<?php echo $apellidoM ?>">
            <input type="hidden" name="curp" value="<?php echo $curp ?>">
            <input type="hidden" name="boleta" value="<?php echo $nBoleta ?>">
            <input type="hidden" name="fechaNacimiento" value="<?php echo $fechaN ?>">
            <input type="hidden" name="genero" value="<?php echo $genero ?>">
            <input type="hidden" name="calle" value="<?php echo $calle ?>">
            <input type="hidden" name="numero" value="<?php echo $numero ?>">
            <input type="hidden" name="colonia" value="<?php echo $colonia ?>">
            <input type="hidden" name="alcaldia" value="<?php echo $alcaldia ?>">
            <input type="hidden" name="codigoPostal" value="<?php echo $CP ?>">
            <input type="hidden" name="telefono" value="<?php echo $telefono ?>">
            <input type="hidden" name="email" value="<?php echo $email ?>">
            <input type="hidden" name="escuela" value="<?php echo $escuela ?>">
            <input type="hidden" name="estado" value="<?php echo $estado ?>">
            <input type="hidden" name="Nescuela" value="<?php echo $nEscuela ?>">
            <input type="hidden" name="promedio" value="<?php echo $promedio ?>">
            <input type="hidden" name="opcionEscom" value="<?php echo $opEsc ?>">
          </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
          <div class="col-md-3">
              <button type="button" id="btnModificar" onclick="window.history.back()" class="btn btn-secondary" >Modificar</button>
          </div>    
          <div class="col-md-4">
                  <button type="button" id="btnGuardar" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdfModal" >Aceptar</button>
          </div>
          <div class="col-md-5"></div>
          <div class="col-md-6 text-center">
                  <button type="button" id="generarPDF" class="btn btn-primary" style="display:none;">Generar PDF</button>
          </div>
      </div>
    <!-- Modal de pdf -->
    <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="pdfModalLabel">Generación PDF</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h6>¿Desea descargar el comprobante en formato PDF?</h6>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            <button type="button" id="generarPDF" class="btn btn-primary" data-bs-dismiss="modal">Si</button>
          </div>
        </div>
      </div>
    </div>
  </form>
    
  
  </div>
   
</body>
<footer class="my-5 pt-5 text-muted text-center text-small">
   <p class="mb-1">&copy; 2022-2023 IPN</p>
   <ul class="list-inline">
     <li class="list-inline-item"><a href="#">Privacidad</a></li>
     <li class="list-inline-item"><a href="#">Terminos</a></li>
     <li class="list-inline-item"><a href="#">Soporte</a></li>
   </ul>
 </footer>
</html>