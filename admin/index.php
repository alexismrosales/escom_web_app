<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="icon" type="image/x-icon" href="Img/logo_ipn.png">

	<!--JQUERY - AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<!--SCRIPT - Login-->
	<script src="js/LoginValidacion.js"></script>
	<title>Administrador</title>
</head>
<body class="bg-info-subtle bg-gradient">
	<div class="layoutAuthentication">
		<div class="layoutAuthentication_content">
			<main>
				<div class="container">
					<dvi class="row justify-content-center">
						<div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8">
							<div class="card card-raised shadow-10 mt-5 mt-xl-10 mb-4">
								<div class="card-body p-5">
									<div class="text-center">
										<img src="img/escudoESCOM.png" alt="..." class="mb-3" style="height: 48px;">
										<h1 class="display-6 mb-0">Inicio de sesión</h1>
										<div class="subheading-1 mb-5">-Administrador-</div>
									</div>
									<form id="form-login">
										<div class="error text-center" id="error" style="display:none;">El usuario o contraseña es inválido</div>
											
										<div class="mb-4">	
											<div class="form-floating">
												<input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario">
											<label for="usuario">Usuario</label>
											</div>
										</div>
										<div class="mb-4">
											<div class="form-floating">
												<input type="password" class="form-control" id="password" name="password" placeholder="password">
											<label for="password">Contraseña</label>
											</div>
										</div>
										<div class="form-group text-center">
											<!--<a href="" class="small fw-normal text-decoration-none">No tienes una cuenta. Crea una cuenta</a>-->
											<button type="submit" class="btn btn-primary" id="btnLogin">Login</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</dvi>
				</div>	
			</main>
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