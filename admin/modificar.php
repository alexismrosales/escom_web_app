<?php
session_start();
include "php/conexionBD.php";
$boleta = $_GET['boleta'];
$query_mostrar = "SELECT * FROM `alumno` WHERE `boleta`=$boleta;";
$resultado = mysqli_query($conexion, $query_mostrar);
$datos = mysqli_fetch_array($resultado);

$nombre = $datos['nombre'];
$apellidoP = $datos['apellido_paterno'];
$apellidoM = $datos['apellido_materno'];
$curp = $datos['curp'];
$nBoleta = $datos['boleta'];
$fechaN = $datos['fecha_nacimiento'];
$genero = $datos['genero'];
//Contacto
$calle = $datos['calle'];
$numero = $datos['numero'];
$colonia = $datos['colonia'];
$alcaldia = $datos['alcaldia'];
$CP = $datos['cp'];
$telefono = $datos['telefono'];
$email = $datos['email'];
//Procedencia
$escuela = $datos['escuela_procedencia'];
$estado = $datos['estado'];
$promedio = $datos['promedio'];
$opEsc = $datos['numero_opcion'];
//Horario
$hora = $datos['horario_asignado'];
$laboratorio = $datos['laboratorio_asignado'];

$opcionHora = $datos['horario_asignado'];
$lab_hora = $datos['laboratorio_asignado'];
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
				<!--Modal de boostrap para verificar los datos-->
        <script src="js/actualizacionDatos.js"></script>
		
		<title>ESCOM. Actualizacion de Datos</title>
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
							<h2>Modificación alumno</h2>
						</div>
					</div>
				</div>
				<form name="formulario_update" id="formulario_update" method="post" class="row g-3 needs-validation" action="ConfirmacionDatos.php" novalidate>
                <div class="row ">
					<div class="col-md-3"></div>
                    <div class="col-md-4">
                        <h4 class="mb-3">Laboratorio </h4>
                        <div class="col-md-12">
                            <label for="lab" class="form-label" id="lablbl">Laboratorio asignado</label>
                            <select class="form-select" id="lab" name="lab" required>
                          				<option value="1" <?php if(substr($datos['laboratorio_asignado'], -1) == "1"){ echo "selected"; } ?>>1</option>
                          				<option value="2" <?php if(substr($datos['laboratorio_asignado'], -1) == "2"){ echo "selected"; } ?>>2</option>
                          				<option value="3" <?php if(substr($datos['laboratorio_asignado'], -1) == "3"){ echo "selected"; } ?>>3</option>
                          				<option value="4" <?php if(substr($datos['laboratorio_asignado'], -1) == "4"){ echo "selected"; } ?>>4</option>
                          				<option value="5" <?php if(substr($datos['laboratorio_asignado'], -1) == "5"){ echo "selected"; } ?>>5</option>
                          				<option value="6" <?php if(substr($datos['laboratorio_asignado'], -1) == "6"){ echo "selected"; } ?>>6</option>
                        	</select>
                            <div class="invalid-feedback">
                         				seleccione una opcion.
                        			</div>
                            
                        </div>
                        
                    </div>
                    
					<div class="col-md-2">
                		<h4 class="mb-3">Horario</h4>
                		<!--Horoario-->
                		<label for="opcionHora" class="form-label" id="horalbl">Hora asignada</label>
                        <div class="row ">
                            <div class="col-md-12" id="opcioHora">
                                    <div class="form-check" >
                                        <input id="opcionHora" name="opcionHora" type="radio" class="form-check-input" <?php if(substr($datos['horario_asignado'], -8) == "08:00:00"){echo "checked";} ?> value="8" required>
                                        <label class="form-check-label" for="opcionHora">08:00:00</label>
                                    </div>

                                        <div class="form-check">                                                                                        
                                            <input id="opcionHora" name="opcionHora" type="radio" class="form-check-input" value="9" <?php if(substr($datos['horario_asignado'], -8) == "09:45:00"){echo "checked";} ?> required>
                                            <label class="form-check-label" for="opcionHora">09:45:00</label>
                                        </div>
                                        
                                </div>   
                            </div>
                   
           	            </div>
                           
                    <div class="col-md-3"><span class="valor_hora" hidden><?php echo substr($opcionHora,12,-6);?></span> <span class="lab_hora" hidden><?php echo substr($lab_hora, -1);?></span></div>
                    
                </div>
         <div>
		 <script type="text/javascript">
			$('input[type=radio]').click(function(e) {
				
				var opcionHora = $(this).val(); 
				$('.valor_hora').html(opcionHora);
				
			});
			$('select').click(function(e)
			{
				var lab_hora = $('#lab').val();
				$('.lab_hora').html(lab_hora);
				
			})

			</script>
                <!--Falta identar-->
				<div class="row ">
					<div class="col-md-3"></div>
					<div class="col-md-6">
                		<h4 class="mb-3">Identidad</h4>
                		<!--Nombre-->
                		<label for="nombre" class="form-label" id="nombrelbl">Nombre(s)</label>
                		<div class="col-md-12 formularioGrupo" id="grupo_nombre">
                			<div class="formulario_grupoInput">
                				<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre ?>" maxlength="64" title="El campo debe de contener solo letras. ej. Juan" required>
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
                				<input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" value="<?php echo $apellidoP ?>" maxlength="64" pattern="[A-zÀ-ú]{1,64}"  title="El campo debe de contener solo letras. ej. Perez" required>
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
                				<input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" value="<?php echo $apellidoM ?>" maxlength="64" pattern="[A-zÀ-ú]{1,64}" title="El campo debe de contener solo letras, ej, Juan" required>
                				<i class="formulario_validacionEstado fas fa-times-circle"></i>
                				<div class="invalid-feedback">
                 					El apellido materno es requerido.
                				</div>
                			</div>
                		</div>
                		<p class="formulario_inputError">El apellido solo puede contener letras</p>
                		
           			</div>
				</div>
                <!--Numero de Boleta-->
				<div class="row " hidden>
					<div class="col-md-3"></div>
					<div class="col-md-6">
                		<label for="boleta" class="form-label">Numero de boleta</label>
                		<div class="formulario_grupoInput">
                			<div class="formularioGrupo" id="grupo_boleta">
                				<input type="text" class="form-control" id="boleta" name="boleta" value="<?php echo $nBoleta; ?>" pattern="^(\P[\P*\E*])?[\d]{1,10}" title="El campo de de contener solo letras o numeros. ej. PP2021630123" required>
                				<i class="formulario_validacionEstado fas fa-times-circle"></i>
                				<div class="invalid-feedback">
                 		 			Numero de boleta invalido.
                				</div>
                			</div>
                		</div>
                		<p class="formulario_inputError">El CURP solo puede contener letras y numeros</p>
                		
           			</div>
				</div>

				<!--Curp-->
				<div class="row ">
					<div class="col-md-3"></div>
					<div class="col-md-6">
                		<label for="curp" class="form-label">CURP</label>
                		<div class="formulario_grupoInput">
                			<div class="formularioGrupo" id="grupo_curp">
                				<input type="text" class="form-control" id="curp" name="curp" value="<?php echo $curp ?>" maxlength="18" pattern="[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}" title="El curp no es valido" required>
                				<i class="formulario_validacionEstado fas fa-times-circle"></i>
                				<div class="invalid-feedback">
                 					CURP invalido.
                				</div>
                			</div>
                		</div>
                		<p class="formulario_inputError">CURP invalido</p>
                		
           			</div>
				</div>
				<!--Fecha de nacimiento-->
				<div class="row">
           			<div class="col-md-3"></div>
            			<div class="col-md-2">
                			<label for="Fnacimiento" class="form-label">Fecha de nacimiento </label>
                			<input type="date" id="start" name="fechaNacimiento" value="<?php echo $fechaN ?>" min="1990-01-01" max="2004-12-31"  required >
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
                        			<div class="form-check" >
                            			<input id="genero" name="genero" type="radio" class="form-check-input" <?php if($genero == "M"){echo "checked";} ?> value="M" required>
                            			<label class="form-check-label" for="masculino">Masculino </label>
                        			</div>
                    			</div>
                    			<div class="col-md-6">
                        			<div class="form-check">
                            			<input id="genero" name="genero" type="radio" class="form-check-input" value="F"  <?php if($genero == "F"){echo "checked";} ?>  required>
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
                						<input type="text" class="form-control" id="calle" name="calle" value="<?php echo $calle ?>" maxlength="50" pattern="^[A-zÀ-ú_\d]+" title="El campo debe contener solo letras o numeros. ej. Madero" required>
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
                						<input type="text" class="form-control" id="grupo_numero" name="numero" value="<?php echo $numero ?>" maxlength="6" pattern="^\d+" title="El campo debe contener solo numeros. ej. 5320" required>
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
                								<input type="text" class="form-control" id="colonia" name="colonia" value="<?php echo $colonia ?>"maxlength="30" pattern="^[A-zÀ-ú_\d]+" title="El campo solo debe contener solo letras o numeros. ej. Roma" required>
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
                								<input type="text" class="form-control" id="alcaldia" name="alcaldia" value="<?php echo $alcaldia ?>" required>
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
           								<input type="text" class="form-control" id="CP" name="CP" value="<?php echo $CP ?>" maxlength="5" pattern="^[\d]{1,5}" title="El campo solo debe contener solo numeros. ej. 25470" required>
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
   											<input type="text" class="form-control" id="telefono" name="telefono"  value="<?php echo $telefono ?>" maxlength="20" pattern="^(\+\d{1,3}( )?)?((\(\d{3}\))|\d{3})[- .]?\d{3}[- .]?\d{4}" title="El campo debe tener numero telefonico valido. ej. 5507400909" required>
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
           									<input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>" placeholder="tudireccion@ejemplo.com" required>
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
                    			<div class="col-md-12">
                       				<label for="Estado" class="form-label">Estado</label>
                        			<select class="form-select" id="estado" name="estado" required>
                          				<option value="">Seleccione una estado...</option>
                          				<option value="Aguascalientes" <?php if($estado == "Aguascalientes"){ echo "selected"; } ?> >Aguascalientes</option>
                          				<option value="Baja California"  <?php if($estado == "Baja California"){ echo "selected"; } ?>>Baja California</option>
                          				<option value="California Sur"  <?php if($estado == "California Sur"){ echo "selected"; } ?> >California Sur</option>
                          				<option value="Chiapas" <?php if($estado == "Chiapas"){ echo "selected"; } ?> >Chiapas</option>
                          				<option value="Coahuila" <?php if($estado == "Coahuila"){ echo "selected"; } ?> >Coahuila</option>
                          				<option value="Distrito Federal" <?php if($estado == "Distrito Federal"){ echo "selected"; } ?> >Distrito Federal</option>
                          				<option value="Guanajuato" <?php if($estado == "Guanajuato"){ echo "selected"; } ?> >Guanajuato</option>
                          				<option value="Hidalgo" <?php if($estado == "Hidalgo"){ echo "selected"; } ?> >Hidalgo</option>
                          				<option value="Michoacán" <?php if($estado == "Michoacán"){ echo "selected"; } ?> >Michoacán</option>
                          				<option value="Morelos" <?php if($estado == "Morelos"){ echo "selected"; } ?> >Morelos</option>
                          				<option value="Nayarit" <?php if($estado == "Nayarit"){ echo "selected"; } ?>>Nayarit</option>
                          				<option value="Nuevo León"  <?php if($estado == "Nuevo León"){ echo "selected"; } ?> >Nuevo León</option>
                          				<option value="Oaxaca"  <?php if($estado == "Oaxaca"){ echo "selected"; } ?> >Oaxaca</option>
                          				<option value="Puebla"  <?php if($estado == "Puebla"){ echo "selected"; } ?> >Puebla</option>
                          				<option value="Querétaro" <?php if($estado == "Querétaro"){ echo "selected"; } ?>>Querétaro</option>
                          				<option value="Quintana Roo"  <?php if($estado == "Quintana Roo"){ echo "selected"; } ?> >Quintana Roo</option>
                          				<option value="San Luis Potosí" <?php if($estado == "San Luis Potosí"){ echo "selected"; } ?>>San Luis Potosí</option>
                          				<option value="Sinaloa" <?php if($estado == "Sinaloa"){ echo "selected"; } ?>>Sinaloa</option>
                          				<option value="Sonora" <?php if($estado == "Sonora"){ echo "selected"; } ?>>Sonora</option>
                          				<option value="Tabasco" <?php if($estado == "Tabasco"){ echo "selected"; } ?>>Tabasco</option>
                          				<option value="Tamaulipas" <?php if($estado == "Tamaulipas"){ echo "selected"; } ?>>Tamaulipas</option>
                          				<option value="Tlaxcala" <?php if($estado == "Tlaxcala"){ echo "selected"; } ?>>Tlaxcala</option>
                          				<option value="Veracruz" <?php if($estado == "Veracruz"){ echo "selected"; } ?>>Veracruz</option>
                          				<option value="Yucatán" <?php if($estado == "Yucatán"){ echo "selected"; } ?>>Yucatán</option>
                          				<option value="Zacatecas" <?php if($estado == "Zacatecas"){ echo "selected"; } ?>>Zacatecas</option>
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
           											<input type="text" class="form-control" id="Nescuela" name="Nescuela" value="<?php echo $escuela; ?>" pattern="^[A-zÀ-ú_\d]+" title="El campo debe de contener solo letras o números. ej. Preparatoria2" required>
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
           											<input type="text" class="form-control" id="promedio" name="promedio" value="<?php echo $promedio; ?>" pattern="^[\d]{1,3}" step="0.01" required>
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
                            								<input id="opcionEscom" name="opcionEscom" type="radio" class="form-check-input" value="Primera opción" <?php if($opEsc == 1){ echo "checked"; }?> required>
                            								<label class="form-check-label" for="primerOpcion">Primer opcion</label>
                        								</div>
                    								</div>
                    								<div class="col-md-12">
                  										<div class="form-check">
                       										<input id="opcionEscom" name="opcionEscom" type="radio" class="form-check-input" value="Segunda opción" <?php if($opEsc == 2){ echo "checked"; }?> required>
                       										<label class="form-check-label" for="segundaOpcion">Segunda opcion</label>
                   										</div>
                   									</div>
                   									<div class="col-md-12">
                   										<div class="form-check">
                       										<input id="opcionEscom" name="opcionEscom" type="radio" class="form-check-input" value="Tercera opción" <?php if($opEsc == 3){ echo "checked"; }?>  required>
                       										<label class="form-check-label" for="tercer opcion">Tercera opcion</label>
                   										</div>
                   									</div>
                   									<div class="col-md-12">
                   										<div class="form-check">
                       										<input id="opcionEscom" name="opcionEscom" type="radio" class="form-check-input" value="Otra opción" <?php if($opEsc == 4){ echo "checked"; }?>  required>
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
    		<script src="js/RegistroDatosModificar.js"></script>

		</div>
		
	</div>
	
	<script type="text/javascript" src="js/formulario.js"></script>
	
                       
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

