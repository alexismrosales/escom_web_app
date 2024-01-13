<?php
    session_start();
    $_SESSION['nombre'] = "";
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Mata Chavez, Alexis, Pedro, Peralta Romero">
		<!--Bootstrap CSS-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!--Hoja de estilo para validar los campos-->
		<link rel="stylesheet" href="css/estilo.css">

		<!-- Option 1: Bootstrap Bundle with Popper -->
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	    <!--JQUERY - AJAX-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        
		<title>ESCOM. Registro de Datos</title>
	</head>
	<body>
		<div class="container">
			<!--Logo y titulo-->
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 py-5 text-center">
					<img class="logo"src="img/escudoESCOM.png" alt="..." width="150" height="100">
					<div class="row">
						<div class="col-md-12">
							<br>
							<h2>REGISTRO DE DATOS GENERALES</h2>
							<p class="lead">Alumnos de nuevo ingreso</p>
							<p class="lead">(Enero 2023)</p>
						</div>
					</div>
				</div>
				<form name="formulario" id="formulario" method="post" class="row g-3 needs-validation" action="ConfirmacionDatos.php" novalidate>
<!--Falta identar-->
				<div class="row ">
					<div class="col-md-3"></div>
					<div class="col-md-6">
                		<h4 class="mb-3">Identidad</h4>
                		<!--Nombre-->
                		<label for="nombre" class="form-label" id="nombrelbl">Nombre(s)</label>
                		<div class="col-md-12 formularioGrupo" id="grupo_nombre">
                			<div class="formulario_grupoInput">
                				<input type="text" class="form-control" id="nombre" name="nombre" maxlength="64" title="El campo debe de contener solo letras. ej. Juan" required>
                				<i class="formulario_validacionEstado fas fa-times-circle"></i>
                				<div class="invalid-feedback">
                 					El primer nombre es requerido.
                				</div>
                			</div>
                			<p class="formulario_inputError">El nombre solo puede contener letras</p>
                		</div>
                		
           			 </div>
				</div>

				<!--Apellido Paterno-->
				<div class="row ">
					<div class="col-md-3"></div>
					<div class="col-md-6">
                		<label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
                		<div class="formulario_grupoInput">
                			<div class="formularioGrupo" id="grupo_apellidoPaterno">
                				<input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" maxlength="64" pattern="[A-zÀ-ú]{1,64}"  title="El campo debe de contener solo letras. ej. Perez" required>
                				<i class="formulario_validacionEstado fas fa-times-circle"></i>
                				<div class="invalid-feedback">
                 					El apellido paterno es requerido.
                				</div>
                			</div>
                		</div>
                		<p class="formulario_inputError">El nombre solo puede contener letras</p>
                		
           			</div>
				</div>

				<!--Apellido Materno-->
				<div class="row ">
					<div class="col-md-3"></div>
					<div class="col-md-6">
                		<label for="apellidoMaterno" class="form-label">Apellido Materno</label>
                		<div class="formulario_grupoInput">
                			<div class="formularioGrupo" id="grupo_apellidoMaterno">
                				<input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" maxlength="64" pattern="[A-zÀ-ú]{1,64}" title="El campo debe de contener solo letras, ej, Juan" required>
                				<i class="formulario_validacionEstado fas fa-times-circle"></i>
                				<div class="invalid-feedback">
                 					El apellido materno es requerido.
                				</div>
                			</div>
                		</div>
                		<p class="formulario_inputError">El apellido solo puede contener letras</p>
                		
           			</div>
				</div>

				<!--Curp-->
				<div class="row ">
					<div class="col-md-3"></div>
					<div class="col-md-6">
                		<label for="curp" class="form-label">CURP</label>
                		<div class="formulario_grupoInput">
                			<div class="formularioGrupo" id="grupo_curp">
                				<input type="text" class="form-control" id="curp" name="curp" maxlength="18" pattern="[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}" title="El curp no es valido" required>
                				<i class="formulario_validacionEstado fas fa-times-circle"></i>
                				<div class="invalid-feedback">
                 					CURP invalido.
                				</div>
                			</div>
                		</div>
                		<p class="formulario_inputError">CURP invalido</p>
                		
           			</div>
				</div>

				<!--Numero de Boleta-->
				<div class="row ">
					<div class="col-md-3"></div>
					<div class="col-md-6">
                		<label for="boleta" class="form-label">Numero de boleta</label>
                		<div class="formulario_grupoInput">
                			<div class="formularioGrupo" id="grupo_boleta">
                				<input type="text" class="form-control" id="boleta" name="boleta" pattern="^(\P[\P*\E*])?[\d]{1,10}" title="El campo de de contener solo letras o numeros. ej. PP2021630123" required>
                				<i class="formulario_validacionEstado fas fa-times-circle"></i>
                				<div class="invalid-feedback">
                 		 			Numero de boleta invalido.
                				</div>
                			</div>
                		</div>
                		<p class="formulario_inputError">El CURP solo puede contener letras y numeros</p>
                		
           			</div>
				</div>

				<!--Fecha de nacimiento-->
				<div class="row">
           			<div class="col-md-3"></div>
            			<div class="col-md-2">
                			<label for="Fnacimiento" class="form-label">Fecha de nacimiento </label>
                			<input type="date" id="start" name="fechaNacimiento" value="2018-07-22" min="1990-01-01" max="2004-12-31"  required >
                			<div class="invalid-feedback">
                   				Ingrese un valor.
                			</div> 
            			</div>
       			<!--Género-->
            			<div class="col-md-4">
                			<div class="row">
                    			<div class="col-md-12">
                       				<label for="genero" class="form-label">Género</label>
                    			</div>
                			</div>
                			<div class="row">
                    			<div class="col-md-6">
                        			<div class="form-check">
                            			<input id="genero" name="genero" type="radio" class="form-check-input" value="M" required>
                            			<label class="form-check-label" for="masculino">Masculino </label>
                        			</div>
                    			</div>
                    			<div class="col-md-6">
                        			<div class="form-check">
                            			<input id="genero" name="genero" type="radio" class="form-check-input" value="F" required>
                            			<label class="form-check-label" for="femenino">Femenino </label>
                        			</div>
                    			</div>
                			</div>
            			</div> 
            	</div>
        	

        		<!--CONTACTO-->
        		<hr class="my-3">
        		<div class="row ">
					<div class="col-md-3"></div>
					<div class="col-md-6">
                		<h4 class="mb-3">Contacto</h4>
                		<div class="row">
                			<!--Calle-->
                			<div class="col-md-6">
                				<label for="calle" class="form-label">Calle</label>
                				<div class="formulario_grupoInput">
                					<div class="formularioGrupo" id="grupo_calle">
                						<input type="text" class="form-control" id="calle" name="calle" maxlength="50" pattern="^[A-zÀ-ú_\d]+" title="El campo debe contener solo letras o numeros. ej. Madero" required>
                						<i class="formulario_validacionEstado fas fa-times-circle"></i>
                						<div class="invalid-feedback">
                 		 					Informacion invalida
                						</div>
                					</div>
                				</div>
                				<p class="formulario_inputError">Informacion incorrecta</p>
                				
           					</div>
           					<!--Numero-->
           					<div class="col-md-6">
                				<label for="numero" class="form-label">Numero</label>
                				<div class="formulario_grupoInput">
                					<div class="formularioGrupo" id="grupo_numero">
                						<input type="text" class="form-control" id="grupo_numero" name="numero" maxlength="6" pattern="^\d+" title="El campo debe contener solo numeros. ej. 5320" required>
                						<i class="formulario_validacionEstado fas fa-times-circle"></i>
                						<div class="invalid-feedback">
                 		 					Ingrese el numero de su domicilio.
                						</div>
                					</div>
                				</div>
                				<p class="formulario_inputError">Este campo solo puede llevar numeros</p>
                				
           					</div>
           					<!--Colonia-->
           					<div class="row ">
								<div class="col-md-3"></div>
									<div class="col-md-12">
                						<label for="colonia" class="form-label">Colonia</label>
                						<div class="formulario_grupoInput">
                							<div class="formularioGrupo" id="grupo_colonia">
                								<input type="text" class="form-control" id="colonia" name="colonia" maxlength="30" pattern="^[A-zÀ-ú_\d]+" title="El campo solo debe contener solo letras o numeros. ej. Roma" required>
                								<i class="formulario_validacionEstado fas fa-times-circle"></i>
                								<div class="invalid-feedback">
                 									El campo dede contener  letras.
                								</div>
                							</div>
                						</div>
                						<p class="formulario_inputError">Informacion incorrecta</p>
                						
           							</div>
							</div>
							<!--Alcaldia CHECAR QUE LA ALCALDIA SE HAGA CON UN FORM SELECT-->
							<div class="row ">
								<div class="col-md-3"></div>
									<div class="col-md-12">
                						<label for="alcaldia" class="form-label">Alcaldia</label>
                						<div class="formulario_grupoInput">
                							<div class="formularioGrupo" id="grupo_alcaldia">
                								<input type="text" class="form-control" id="alcaldia" name="alcaldia" required>
                								<i class="formulario_validacionEstado fas fa-times-circle"></i>
                								<div class="invalid-feedback">
                 									Seleccione una opcion.
                								</div>
                							</div>
                						</div>
                						<p class="formulario_inputError">El nombre solo puede contener letras</p>
                						
           							</div>
							</div>
                		</div>
                		<!--Codigo Postal-->
                		<div class="row ">
							<!--<div class="col-md-3"></div>-->
							<div class="col-md-6">
                				<label for="CP" class="form-label">Codigo Postal</label>
               					<div class="formulario_grupoInput">
          							<div class="formularioGrupo" id="grupo_CP">
           								<input type="text" class="form-control" id="CP" name="CP" maxlength="5" pattern="^[\d]{1,5}" title="El campo solo debe contener solo numeros. ej. 25470" required>
                						<i class="formulario_validacionEstado fas fa-times-circle"></i>
                						<div class="invalid-feedback">
                 							Ingrese codigo postal.
           								</div>
                					</div>
                				</div>
                				<p class="formulario_inputError">El CP solo puede contener numeros</p>
                				
       						</div>

       						<!--Telefono o Celular-->
       						<div class="col-md-6">
                				<label for="alcaldia" class="form-label">Telefono o Celular</label>
               						<div class="formulario_grupoInput">
          								<div class="formularioGrupo" id="grupo_telefono">
   											<input type="text" class="form-control" id="telefono" name="telefono" maxlength="20" pattern="^(\+\d{1,3}( )?)?((\(\d{3}\))|\d{3})[- .]?\d{3}[- .]?\d{4}" title="El campo debe tener numero telefonico valido. ej. 5507400909" required>
                							<i class="formulario_validacionEstado fas fa-times-circle"></i>
                							<div class="invalid-feedback">
           										Ingrese un numero telefonico valido.
       										</div>
                						</div>
                					</div>
           							<p class="formulario_inputError">El nombre solo puede contener letras</p>
           							
       						</div>

       						<!--Correo electronico-->
               				<div class="row ">
								<div class="col-md-12">
           							<label for="email" class="form-label">Correo electronico</label>
               						<div class="formulario_grupoInput">
          								<div class="formularioGrupo" id="grupo_email">
           									<input type="email" class="form-control" id="email" name="email" placeholder="tudireccion@ejemplo.com" required>
                							<i class="formulario_validacionEstado fas fa-times-circle"></i>
                							<div class="invalid-feedback">
                 								Ingrese un correo electronico valido.
           									</div>
                						</div>
                					</div>
           							<p class="formulario_inputError">El nombre solo puede contener letras</p>
                					
       							</div>
							</div>
						</div>
                	</div>

                	
                </div>

                

				<hr class="my-3">
				<!--PROCEDENCIA-->
				<div class="row">
            		<div class="col-md-3"></div>
            			<div class="col-md-6">
               				<h4 class="mb-3">Procedencia</h4>
                			<div class="row">
                    			<div class="col-md-6">
                        			<label for="Escuela" class="form-label">Escuela</label>
                       				<select class="form-select" id="escuela" name="escuela" required>
                          				<option value="">Seleccione una opcion...</option>
                          				<option value="CECyT 1">CECyT 1 “González Vázquez Vega”</option>
                          				<option value="CECyT 2">CECyT 2 "Miguel Bernard"</option>
                          				<option value="CECyT 3">CECyT 3 "Estanislao Ramírez Ruiz"</option>
                          				<option value="CECyT 4">CECyT 4 "Lázaro Cárdenas"</option>
                          				<option value="CECyT 5">CECyT 5 "Benito Juárez García"</option>
                          				<option value="CECyT 6">CECyT 6 "Miguel Othón de Mendizábal"</option>
                          				<option value="CECyT 7">CECyT 7 "Cuauhtémoc"</option>
                          				<option value="CECyT 8">CECyT 8 "Narciso Bassols García"</option>
                          				<option value="CECyT 9">CECyT 9 "Juan de Dios Bátiz"</option>
                          				<option value="CECyT 10">CECyT 10 "Carlos Vallejo Márquez"</option>
                          				<option value="CECyT 11">CECyT 11 "Wilfrido Massieu Pérez"</option>
                          				<option value="CECyT 12">CECyT 12 "José María Morelos y Pavón"</option>
                          				<option value="CECyT 13">CECyT 13 "Ricardo Flores Magón"</option>
                          				<option value="CECyT 14">CECyT 14 "Luis Enrique Erro"</option>
                          				<option value="CECyT 15">CECyT 15 "Diódoro Antúnez Echegaray"</option>
                          				<option value="CECyT 19">CECyT 19 “Leona Vicario”</option>
                          				<option value="CET 1">CET 1 “Walter Cross Buchanan”</option>
                          				<option value="otro">Otro (Especificar más adelante)</option>
                        			</select>
                        			<div class="invalid-feedback">
                          				seleccione una opcion.
                        			</div>
                    			</div>

                    			<div class="col-md-6">
                       				<label for="Estado" class="form-label">Estado</label>
                        			<select class="form-select" id="estado" name="estado" required>
                          				<option value="">Seleccione una estado...</option>
                          				<option value="Aguascalientes">Aguascalientes</option>
                          				<option value="Baja California">Baja California</option>
                          				<option value="California Sur">California Sur</option>
                          				<option value="Chiapas">Chiapas</option>
                          				<option value="Coahuila">Coahuila</option>
                          				<option value="Distrito Federal">Distrito Federal</option>
                          				<option value="Guanajuato">Guanajuato</option>
                          				<option value="Hidalgo">Hidalgo</option>
                          				<option value="Michoacán">Michoacán</option>
                          				<option value="Morelos">Morelos</option>
                          				<option value="Nayarit">Nayarit</option>
                          				<option value="Nuevo León">Nuevo León</option>
                          				<option value="Oaxaca">Oaxaca</option>
                          				<option value="Puebla">Puebla</option>
                          				<option value="Querétaro">Querétaro</option>
                          				<option value="Quintana Roo">Quintana Roo</option>
                          				<option value="San Luis Potosí">San Luis Potosí</option>
                          				<option value="Sinaloa">Sinaloa</option>
                          				<option value="Sonora">Sonora</option>
                          				<option value="Tabasco">Tabasco</option>
                          				<option value="Tamaulipas">Tamaulipas</option>
                          				<option value="Tlaxcala">Tlaxcala</option>
                          				<option value="Veracruz">Veracruz</option>
                          				<option value="Yucatán">Yucatán</option>
                          				<option value="Zacatecas">Zacatecas</option>
                        			</select>
                       				<div class="invalid-feedback">
                         				seleccione una opcion.
                        			</div>
                      			</div>

                      			<!--Escuela de procedencia-->
                      			<div>
                      				<div class="row ">
										<div class="col-md-6">
           									<label for="Nescuela" class="form-label">Nombre de la escuela</label>
               								<div class="formulario_grupoInput">
          										<div class="formularioGrupo" id="Nescuela">
           											<input type="text" class="form-control" id="Nescuela" name="Nescuela" pattern="^[A-zÀ-ú_\d]+" title="El campo debe de contener solo letras o números. ej. Preparatoria2" required>
                									<i class="formulario_validacionEstado fas fa-times-circle"></i>
                									<div class="invalid-feedback">
                 										Informacion invalida.
           											</div>
                								</div>
                							</div>
           									<p class="formulario_inputError">El nombre solo puede contener letras</p>
                							
       									</div>

       									<!--Promedio-->
       									<div class="col-md-6">
           									<label for="promedio" class="form-label">Promedio</label>
               								<div class="formulario_grupoInput">
          										<div class="formularioGrupo" id="promedio">
           											<input type="text" class="form-control" id="promedio" name="promedio" pattern="^[\d]{1,3}" step="0.01" required>
                									<i class="formulario_validacionEstado fas fa-times-circle"></i>
                									<div class="invalid-feedback">
                 										Ingrese un promedio valido.
           											</div>
                								</div>
                							</div>
           									<p class="formulario_inputError"> El nombre solo puede contener letras</p>
                							
       									</div>

       									<!--Opcion-->
       									<!--<div class="row">-->
            							<div class="col-md-3"></div>
            								<div class="col-md-6">
                								ESCOM fue:
                								<div class="row">
                    								<div class="col-md-12">
                        								<div class="form-check">
                            								<input id="opcionEscom" name="opcionEscom" type="radio" class="form-check-input" value="Primera opción" required>
                            								<label class="form-check-label" for="primerOpcion">Primer opcion</label>
                        								</div>
                    								</div>
                    								<div class="col-md-12">
                  										<div class="form-check">
                       										<input id="opcionEscom" name="opcionEscom" type="radio" class="form-check-input" value="Segunda opción" required>
                       										<label class="form-check-label" for="segundaOpcion">Segunda opcion</label>
                   										</div>
                   									</div>
                   									<div class="col-md-12">
                   										<div class="form-check">
                       										<input id="opcionEscom" name="opcionEscom" type="radio" class="form-check-input" value="Tercera opción" required>
                       										<label class="form-check-label" for="tercer opcion">Tercera opcion</label>
                   										</div>
                   									</div>
                   									<div class="col-md-12">
                   										<div class="form-check">
                       										<input id="opcionEscom" name="opcionEscom" type="radio" class="form-check-input" value="Otra opción" required>
                        									<label class="form-check-label" for="otraOpcion">Otra opcion</label>
                    									</div>
                    								</div>
                								</div>
            								</div>
        								</div>
									</div>
                      			</div>	
                      		</div>
                      	</div>
                    </div>
                </div>

                <hr class="my-4">
        			<div class="row">
            	<div class="col-md-4"></div>
				
            		<div class="col-md-3">
                	<button class="btn btn-secondary" id="enviar-datos" type="submit">Registrar</button>
            	</div>
            	<div class="col-md-3">
                	<button class="btn btn-secondary" type="reset">Limpiar</button>
            	</div>       
			</form>
			<!--Modal de boostrap para verificar los datos-->
    		<script src="js/RegistroDatosAgregar.js"></script>
		</div>
	</div>
	<script src="js/formulario_agregar.js"></script>
</body>
</html>