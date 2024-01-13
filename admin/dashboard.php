<?php
    session_start();
    if(empty($_SESSION['usuario']) || empty($_GET))
    {
        header("Location: invalido.php");
        die();
    }
    include "php/conexionBD.php";
    $query_datos = "SELECT * FROM `alumno`;";
    $resultado = mysqli_query($conexion, $query_datos);
                                
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="icon" type="image/x-icon" href="Img/logo_ipn.png">

	<!--JQUERY - AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

	<title>Administrador</title>
</head>
<body class="bg-info-subtle bg-gradient">
   
    <div class="container">
        
        <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img class="logo"src="img/escudoESCOM.png" alt="..." width="60" height="50">
            <a class="navbar-brand">&ensp;ESCOM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page">
                    <?php echo strtoupper($_GET['usuario']); ?>
                </a>
                </li>
            </ul>
                <li class="nav-item d-flex">
                <a class="nav-link" href="logout.php">Cerrar sesión</a>
                </li>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3>DATOS DE REGISTROS ALUMNOS</h3>
                        <a href="agregar.php<?php echo $datos['boleta'] ?>" class="btn btn-secondary">Agregar</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Boleta</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Laboratorio</th>
                                    <th>Hora</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                        <tbody>
                            <?php
                            while ($datos = mysqli_fetch_array($resultado)) {
                                $lab = substr($datos['laboratorio_asignado'], -1);
                                $hora = substr($datos['horario_asignado'], -8);
                            ?>
                                <tr>
                                    <th><?php echo $datos['boleta']; ?></th>
                                    <th><?php echo $datos['nombre']; ?></th>
                                    <th><?php echo $datos['apellido_paterno']; ?></th>
                                    <th><?php echo $datos['apellido_materno']; ?></th>
                                    <th><?php echo $lab; ?></th>
                                    <th><?php echo $hora; ?></th>
                                    <th><?php echo $datos['email']; ?></th>
                                    <th><a href="modificar.php?boleta=<?php echo $datos['boleta'] ?>" class="btn btn-secondary">Editar</a></th>
                                    <th><a href="eliminar.php?boleta=<?php echo $datos['boleta'] ?>" class="btn btn-secondary">Eliminar</a></th>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        </table>
                        
                    </div>               
                </div>
            </div>
        </div>
        
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