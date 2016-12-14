	<?php if ($varReg == 1) { ?>
		<div class="cont_login reg">
			<style type="text/css">.slider{display: none}</style>
		<center>	
			<h1 class="h1_r">Registro Cliente Natural</h1></center>
					<hr></hr>
						<div class="Mg_Rg"><p class="Tl_Rg">Regístrate es rápido, queremos saber un poco sobre ti:</p class="Tl_Rg"></div>
							<form method="POST" action="Controller/Register.php"><!-- <br> --><center>
								<input type="hidden" name="Id_R" value="1">
								<table class="tbl-rg">
								<tr>
									<td><input name="Nombre" class="text t2" type="text" placeholder="Tu Nombre *" title="Solo letras | Ej: Andrés" required></td>
								    <td><input name="Direccion" class="text t2" type="text" placeholder="Tu Dirección 1 *" title="Alfanumerico | Ej: CALLE 4D # 20 - 34" required></td>
								    <td><input name="Direccion2" class="text t2" type="text" placeholder="Tu Dirección 2" title="Alfanumerico | Ej: Apartamento 306"></td>
								</tr>
								<tr>
									<td><select name="Ciudad" class="text t2 lst" placeholder="Tu Ciudad *" title="Selección | Lista despegable" required>
										<option value="Tu Ciudad *" class="list"><label class="list">Tu Ciudad *</label></option>
											<option value="Amazonas">Amazonas</option>
											<option value="Antioquia">Antioquia</option>
											<option value="Arauca">Arauca</option>
											<option value="Atlantico">Atlantico</option>
											<option value="Bogota DC">Bogota D,C.</option>
											<option value="Bolivar">Bolivar</option>
											<option value="Boyacá">Boyacá</option>
											<option value="Caldas">Caldas</option>
											<option value="Caquetá">Caquetá</option>
											<option value="Casanare">Casanare</option>
											<option value="Cauca">Cauca</option>
											<option value="Cesar">Cesar</option>
											<option value="Chocó">Chocó</option>
											<option value="Córdoba">Córdoba</option>
											<option value="Cundinamarca">Cundinamarca</option>
											<option value="Guainía">Guainía</option>
											<option value="Guaviare">Guaviare</option>
											<option value="Huila">Huila</option>
											<option value="La Guajira">La Guajira</option>
											<option value="Magdalena">Magdalena</option>
											<option value="Meta">Meta</option>
											<option value="Nariño">Nariño</option>
											<option value="Norte de Santander">Norte de Santander</option>
											<option value="Putumayo">Putumayo</option>
											<option value="Quindio">Quindio</option>
											<option value="Risaralda">Risaralda</option>
											<option value="San Andres y Providencia">San Andres y Providencia</option>
											<option value="Santander">Santander</option>
											<option value="Sucre">Sucre</option>
											<option value="Tolima">Tolima</option>
											<option value="Valle del Cauca">Valle del Cauca</option>
											<option value="Vaupés">Vaupés</option>
											<option value="Vichada">Vichada</option>
										</select></td>
								    <td><input name="Localidad" class="text t2" type="text" placeholder="Tu Localidad *" title="Texto | Escriba nombre de localidad" required></td>
								    <td><input name="Correo" class="text t2" type="email" placeholder="Tu E-mail *" title="Correo | Ej: andres.gonzales@gmail.com" required></td>
								</tr>
								<tr>
									<td><input name="Telefono" class="text t2" type="number" placeholder="Tu Número de Teléfono *" title="Númerico | Ej: 320 7454545" required></td>
								    <td><input name="Celular" class="text t2" type="number" placeholder="Tu Número de Celular" title="Númerico | Ej: 5618282"></td>
								    <td><center><div class="Pl_Pv"><a href="Terms/Terms_&_Conditions_Cargbox_.pdf" class="Pl_Tx" target="blank">Términos y Condiciones</a> &nbsp; Acepto<input type="radio" name="Pl" value="No" required></div></center></td>
								</tr>
								</table>
								<input class="submit sb1" type="submit" value="Terminé"><br>
							</form>
							<div class="sesion"><a href="?var=2"><div><</div></a></div>
						<!-- <a class="a" href="?var=2">Iniciar Sesión</a><br> -->
					</center>
				</div>
	<?php }elseif($varReg == 3) { ?>
		<div class="cont_login reg">
			<style type="text/css">.slider{display: none}</style>
		<center>	
			<h1 class="h1_r">Registro Empresa</h1>
					<hr></hr>
					<form name="FormMail"  method="POST" action="Controller/Register.php" onSubmit="return valid_mail()"><br>
						<input type="hidden" name="Id_R" value="2">
						<table class="tbl-rg">
							<tr>
								<td><input name="Nombre_E" class="text t2" type="text" placeholder="Nombre Compañia *" title="Texto | Ej: Nacional de Electricos S.A.S" required></td>
								<td><input name="Actividad" class="text t2" type="number" placeholder="NIT *" title="Texto | Ej: Andrés Gomez" required></td>
								<td><input name="Telefono" class="text t2" type="number" placeholder="Número Teléfono *" title="Númerico | Ej: 320 7454545" required></td>
							    <td><input name="Celular" class="text t2" type="number" placeholder="Número de Celular" title="Númerico | Ej: 5618282"></td>
								<!-- <td><input name="Ciudades_Fr" class="text t2" type="text" placeholder="X" title="Texto | Ej: Bogotá, Medellin" required></td> -->
							</tr>
							<tr>
								<td><input name="Direccion" class="text t2" type="text" placeholder="Dirección Principal *" title="Alfanumerico | Ej: CALLE 4D # 20 - 34" required></td>
							    <td><input name="Direccion2" class="text t2" type="text" placeholder="Dirección Complementaria *" title="Alfanumerico | Ej: Apartamento 306"></td>
							    <td><select name="Ciudad" class="text t2" placeholder="Departamento *" title="Selección | Lista despegable" required>
									<option class="" value="" class="list0" selected>Departamento *</option>
										<option value="Amazonas">Amazonas</option>
										<option value="Antioquia">Antioquia</option>
										<option value="Arauca">Arauca</option>
										<option value="Atlantico">Atlantico</option>
										<option value="Bogota DC">Bogota D,C.</option>
										<option value="Bolivar">Bolivar</option>
										<option value="Boyacá">Boyacá</option>
										<option value="Caldas">Caldas</option>
										<option value="Caquetá">Caquetá</option>
										<option value="Casanare">Casanare</option>
										<option value="Cauca">Cauca</option>
										<option value="Cesar">Cesar</option>
										<option value="Chocó">Chocó</option>
										<option value="Córdoba">Córdoba</option>
										<option value="Cundinamarca">Cundinamarca</option>
										<option value="Guainía">Guainía</option>
										<option value="Guaviare">Guaviare</option>
										<option value="Huila">Huila</option>
										<option value="La Guajira">La Guajira</option>
										<option value="Magdalena">Magdalena</option>
										<option value="Meta">Meta</option>
										<option value="Nariño">Nariño</option>
										<option value="Norte de Santander">Norte de Santander</option>
										<option value="Putumayo">Putumayo</option>
										<option value="Quindio">Quindio</option>
										<option value="Risaralda">Risaralda</option>
										<option value="San Andres y Providencia">San Andres y Providencia</option>
										<option value="Santander">Santander</option>
										<option value="Sucre">Sucre</option>
										<option value="Tolima">Tolima</option>
										<option value="Valle del Cauca">Valle del Cauca</option>
										<option value="Vaupés">Vaupés</option>
										<option value="Vichada">Vichada</option>
									</select>
								</td>
							    	<td><input name="Localidad" class="text t2" type="text" placeholder="Ciudad / Region *" title="Texto | Escriba nombre de localidad" required></td>
							</tr>
							<tr>
								<td><input name="Nombre" class="text t2" type="text" placeholder="Nombre de Contacto  *" title="Texto | Ej: Provedor de Energía" required></td>
							    <td><input name="Correo" class="text t2" id="email" type="email" placeholder="E-mail *" title="Correo | Ej: andres.gonzales@empresa.com" required></td>
							    <td><input name="Correo2" class="text t2" id="email2" type="email" placeholder="Repita - E-mail *" title="Correo | Ej: andres.gonzales@empresa.com" required><div id="errorE" class="errorE">¡Los correos no coinciden!</div></td>
							    <td><center><div class="Pl_Pv"><a href="Terms/Terms_&_Conditions_Cargbox_.pdf" value="Yes" class="Pl_Tx" target="blank">Acepto Términos</a> &nbsp;&nbsp; Si<input type="checkbox" name="Pl" value="No"  required></div></center></td>
							</tr>
							    <!-- <td><input name="Celular" class="text t2" type="number" placeholder="Número de Celular" title="Númerico | Ej: 5618282"></td> -->
						</table>
						<input class="submit sb1" id="sb1" type="submit" value="Registrarme"><br>
					</form>
					<div class="sesion"><a href="?var=2"><div><</div></a></div>
<!-- 					<a href="?var=2"><div class="sesion"><</div></a>
 -->
					<!-- <a class="a" href="?var=2">Iniciar Sesión</a><br> -->
					</center>
				</div>
	<?php }elseif($varReg == 2 || $varReg == "" || $varReg > 4 || $varReg < 0) { /*$varReg < 0 */
				@$Vlda = $_GET['vld']; 
		?>
		<div class="cont_login">
			<center>
			<h1>Inicia Sesión</h1>
			    <hr></hr>
			    <?php if ($Vlda == 916) {
					echo	'<div class="Mg_Rg Vl"><p class="Tl_Pss">Por favor, Verifique Usuario y Contraseña...</p class="Tl_Rg"></div>';
					echo 	"<style>.r1,.r2,.registro{display: none}.cont_login{height: 370px; margin-bottom: 1.3%;}</style>";
      error_reporting(E_ERROR | E_WARNING | E_PARSE);
if(isset ($_POST["permiso"])){
$permiso=$_POST["permiso"];
}
            echo $permiso;
			    } ?>
					<form method="POST" action="Controller/Validate.php"><br>
						<input name="Usr" class="text t1" type="text" placeholder="Usuario" required><br>
						<input name="Pss" class="text" type="password" placeholder="Contraseña" required><br><br>
						<input class="submit" type="submit" value="Acceder"><br>
					</form><br>
					<div class="registro">Registrarme</div>
					<a href="?var=1"><div class="r1">Persona</div></a>
					<a href="?var=3"><div class="r1 r2">Empresa</div></a>
			<!-- <a class="a" href="?var=1">Aún no estoy registrado</a><br> -->
			<?php if ($Vlda == 916) {echo "<a href=''><div class='PassGain'>Restablecer contraseña</div></a>";} ?>
			</center>
		</div>
		<?php }elseif($varReg == 4) { 
			$mail = $_GET['mail'];
			$User_Id = $_SESSION['Correo'];
			if ($User_Id) {
			if ($mail == 'True') {?>
			<center>
			<style type="text/css">.slider{display: none}</style>
		<div class="cont_login Pass">
			<h1>Asignación de Contraseña</h1>
			    <hr></hr>
					<div class="Mg_Rg Mg_Pss"><p class="Tl_Pss">Datos regitrados correctamente, solo queda asignar la contraseña:</p class="Tl_Rg"></div>
					<form name="FormPass" method="POST" action="Controller/Key.php" onSubmit="return valid_pass()">
						<input value='<?php echo $User_Id; ?>' class="text t1" type="text" placeholder="Usuario" readonly><br>
						<input name="Pass2" class="text" type="password" placeholder="Cree su Contraseña *"><br>
						<input name="Pass" class="text" type="password" placeholder="Repita Contraseña *"><br><br>
						<input class="submit" type="submit" value="Finalizar"><br>
						<div class="sesion spass"><a href="?var=2"><div>Cancelar</div></a></div>
					</form><br>
			<!-- <a class="a" href="?var=1">Aún no estoy registrado</a><br> -->
		</div>
			</center>

		<?php }elseif ($mail == 'False' OR !$User_Id){ ?>
		<center>
			<style type="text/css">.slider{display: none}</style>
		<div class="cont_login Pass">
			<h1>Asignación de Contraseña</h1>
			    <hr></hr>
					<div class="Mg_Rg Cl_Err"><h2>Error:</h2><p class="Tl_Pss Tl_Pss_Err">1. Ocurrio un error al insertar datos. <br>2. La URL que quieres ver es Erronea. <br>3. Intentas hacer algo no valido.</p class="Tl_Rg"><center><div class="r1 rErr"><a href="?var=2"><div>Ir al Inicio</div></a></div></center></div>
		</div>
	</center>
	<?php }
	}else{ ?>
			<style type="text/css">.slider{display: none}</style>
		<center>
		<div class="cont_login Pass">
			<h1>Asignación de Contraseña</h1>
			    <hr></hr>
					<div class="Mg_Rg Cl_Err"><h2>Error:</h2><p class="Tl_Pss Tl_Pss_Err">1. Ocurrio un error al insertar datos. <br>2. La URL que quieres ver es Erronea. <br>3. Intentas hacer algo no valido.</p class="Tl_Rg"><center><div class="r1 rErr"><a href="?var=2"><div>Ir al Inicio</div></a></div></center></div>
		</div>
	</center>
	<?php } 
		} ?>
