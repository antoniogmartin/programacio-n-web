<?php
session_start();
require_once('class.usuario.php');
$usuario = new USUARIO();

if($usuario->is_loggedin()!="")//si esta logueado
{
	$usuario->redirect('home.php');
}

else
		{
			try
			{
						if(isset($_POST['suscribirse']))//si se ha mandado suscribirse
						{
							$unick = strip_tags($_POST['nick']);
							$unombre = strip_tags($_POST['nombre']);
							$uapellidos = strip_tags($_POST['apellidos']);
							$upass = strip_tags($_POST['clave']);
							$umail = strip_tags($_POST['email']);
							$udir_postal = strip_tags($_POST['dir_postal']);
							$ucod_postal = strip_tags($_POST['cod_postal']);
							$uprovincia = strip_tags($_POST['provincia']);
							$udni = strip_tags($_POST['dni']);
							$uvisa= strip_tags($_POST['visa1'].$_POST['visa2'].$_POST['visa3'].$_POST['visa4']);//concateno valores de visa
						 	$uobservaciones = strip_tags($_POST['observaciones']);
							$uenvio = strip_tags($_POST['envio']);
							$usuario->redirect("suscribirse.php");

					$stmt = $usuario->runQuery("SELECT nick, email FROM usuario WHERE nick=:unick");
					$stmt->execute(array(':unick'=>$unick));
					$row=$stmt->fetch(PDO::FETCH_ASSOC);

					if($row['nick']==$unick) {
						$error[] = "El usuario ya esta cogido!";
					}
					else
					{
						if($usuario->registrar($unick,$unombre,$uapellidos,$umail,$upass,$udir_postal,$ucod_postal,$uprovincia,$udni,$uvisa,$uobservaciones,$uenvio)){
							$usuario->redirect('suscribirse.php?joined');//por esto se usa el get indicamos que estamos identificados
						}
					}
				}
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}




?>
<script type="text/javascript">

		function validacion() {
			var valor;
			var msg="";
			var res=true;
			valor = document.getElementById("nombre").value;
			if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
				msg+="[ERROR] El campo nombre no puede estar vacio\n";
				res=false;
			}
			valor = document.getElementById("apellidos").value;
		 	if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
		    // Si no se cumple la condicion...
		    msg+="[ERROR] El campo apellidos no puede estar vacio\n";

					res=false;
		  }
			valor = document.getElementById("nick").value;
			if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
			// Si no se cumple la condicion...
			msg+="[ERROR] El campo nombre de usuario no puede estar vacio\n";

				res=false;
			}

			valor = document.forms.suscribirse.clave.value;
			if (valor == null || valor.length == 0 || /^\s+$/.test(valor)||valor.length < 4) {
			// Si no se cumple la condicion...
			msg+='[ERROR] El campo clave debe tener al menos 4 digitos\n';

				res=false;
			}

			valor = document.forms.suscribirse.dir_postal.value;//otra forma de llamar a los elementos
			if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
			// Si no se cumple la condicion...
			msg+='[ERROR] El campo dirección postal no puede estar vacio\n';

				res=false;
			}

			valor = document.getElementById("cod_postal").value;
			if (valor == null || valor.length == 0 || /^\s+$/.test(valor)||!(/^\d{5}$/.test(valor))) {
			// Si no se cumple la condicion...
			msg+='[ERROR] El campo codigo postal debe tener 5 dígitos\n';

				res=false;
			}
			//cualquier valor seleccionado de la lista de provincias es valido
			valor = document.getElementById("email").value;
			var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if ( !expr.test(valor) ){
					msg+='[ERROR] La dirección de correo es incorrecta.\n';

						res=false;
			}
			valor = document.getElementById("dni").value;
				if( !(/^\d{8}$/.test(valor)) ) {
						msg+='[ERROR] dni no valido, debe tener 8 numeros\n';
						res=false;
				}
				valor = document.getElementById("visa1").value;
				var valor2=document.getElementById("visa2").value;
				var valor3=document.getElementById("visa3").value;
				var valor4=document.getElementById("visa4").value;
					if( !(/^\d{4}$/.test(valor))||!(/^\d{4}$/.test(valor2))||!(/^\d{2}$/.test(valor3))||!(/^\d{10}$/.test(valor4))) {
							msg+='[ERROR] Numeros visa incorrectos\n';
					}

				// No hace falta comprobar que observaciones esté relleno puesto que puede ser null en la bd

				valor= document.getElementById("checkCondiciones");
				if( !valor.checked ) {
					msg+='[ERROR] Acepta las condiciones\n';
					res=false;

				}//comprobamos que se han leido las condiciones*/

					if(!res){
						alert(msg);
					}
					return res;

		}
</script>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Songore</title>
		<link rel="stylesheet" href="style_music.css">

	</head>

	<body>

			<header>

				<h1><img src="songore.png" width='50' height='50' />Songore</h1>

				<section class="id_form">

					<label for="campoDeTexto1">Usuario:</label>
						<input type = "text" id = "campoDeTexto1" name="campoDeTexto1" />
						<label for="campoDeTexto2">Password:</label>
						<input type = "password" id = "campoDeTexto2" name="campoDeTexto2" />
						<input type = "submit" id = "button1" value = "Acceder"/>
				</section>
            </header>



		<section class="main">
			 	<section class="secciones">
							<table  class="secciones">
							                <thead>


							                    <tr>
							                        <td class="secciones" style="background-color: lavender">
							                            <a href="index.php" >HOME</a>
							                        </td>
							                        <td class="secciones"style="background-color: lightblue">
							                             <a href="./rock/rock.php">ROCK</a>
							                        </td>
							                        <td class="secciones"style="background-color: lightgreen">
							                             <a href="./reggaeton/reggaeton.php" >REGGAETON</a>
							                        </td>
							                        <td class="secciones"style="background-color: #ff3333">
							                             <a href="./edm/edm.php">EDM</a>
							                        </td>
							                        <td class="secciones" style="background-color: #fAA223">
							                             <a href="suscribirse.php">SUSCRIBIRSE</a>
							                       <td class="secciones" style="background-color: white">
							                             <a href="index.php">M&AacuteS VENDIDOS</a>
							                        </td>
							                        <td class="secciones" style="background-color: lightpink">
							                             <a href="index.php">M&AacuteS COMENTADOS</a>
							                        </td>

							                    </tr>

							                </thead>
							</table>
				</section>

			   	<section class="ad_tab"><img src="fast_ssd_ad.jpeg" alt="fats ssd">
			     </section>
	        <aside>


	             	<table border="1">


	             		<tbody>
	             			<tr>
		             			<td>
		             				<h3>M&aacutes vendidos</h3>
		             			</td>
	             			</tr>
	             		<tr><td>
					        <table class="disco">
					        			<tbody>
					        				<tr><td>
					        				<img src="./edm/galantis_no_money_20160331/galantis_no_money_20160331.jpeg" alt="no_money_galantis" width='60' height='70'>
					        				</td></tr>
					        				<tr><td><p>Disco:No money</p></td></tr>
					        				<tr><td><p>Autor:Galantis</p></td>
					        				<td><a href="./edm/armin_van_buuren_embrace_20151029/armin_van_buuren_embrace_20151029.php"><p>ver</p></a></td>
					        				<td>
						        				<a href="broke-for-free.mp3" target="_blank"><img src="play.png" width='28' height='25'></a>
						        				</td>
					        				</tr>

					        			</tbody>

					        </table>
				        </td></tr>
			  			<tr><td>
					  		 <table class="disco">
						        			<tbody>
						        				<tr><td>
						        				<img src="./edm/mat_zo_self_assemble_20160325/mat_zo_self_assemble_20160325.jpeg" width='60' height='70' alt="self_assemble">
						        				</td></tr>
						        				<tr><td><p>Disco:Self assemble</p></td></tr>
						        				<tr><td><p>Autor:Mat Zo</p></td>
						        				<td><a href="./edm/armin_van_buuren_embrace_20151029/armin_van_buuren_embrace_20151029.php"><p>ver</p></a></td>
						        				<td>
						        				<a href="broke-for-free.mp3" target="_blank"><img src="play.png" width='28' height='25'></a>
						        				</td>
						        				</tr>

						        			</tbody>

						        </table>
					     </td></tr>
					     <tr><td>
						       <table class="disco">
						        			<tbody>
						        				<tr><td>
						        				<img src="./edm/alan_walker_faded_20151203/alan_walker_faded_20151203.jpeg" width='70' height='70' alt="self_assemble">
						        				</td></tr>
						        				<tr><td><p>Disco:Faded</p></td></tr>
						        				<tr><td><p>Autor:Alan Walker</p></td>
						        				<td><a href="./edm/armin_van_buuren_embrace_20151029/armin_van_buuren_embrace_20151029.php"><p>ver</p></a></td>
						        				<td>
						        				<a href="broke-for-free.mp3" target="_blank"><img src="play.png" width='28' height='25'></a>
						        				</td>
						        				</tr>

						        			</tbody>

						      	</table>
					      </td></tr>
					      <tr><td>
						      	<table class="disco">
						        			<tbody>
						        				<tr><td>
						        				<img src="./edm/taival_frostbite_20160302/taival_frostbite_20160302.jpeg" width='60' height='70' alt="self_assemble">
						        				</td></tr>
						        				<tr><td><p>Disco:Frostbite</p></td></tr>
						        				<tr><td><p>Autor:Taival</p></td>
						        				<td><a href="./edm/armin_van_buuren_embrace_20151029/armin_van_buuren_embrace_20151029.php"><p>ver</p></a></td>
						        				<td>
						        				<a href="broke-for-free.mp3" target="_blank"><img src="play.png" width='28' height='25'></a>
						        				</td>
						        				</tr>

						        			</tbody>

						      	</table>
					      	</td></tr>

					   </tbody>

	             </table>

				</aside>

					<section class="genero">
					<h1>Suscribir</h1>

					</section>

				<section class="subtitulo">
					<p>Subtitulo de la suscripci&oacuten</p>
				</section>
				<?php
					if(isset($error))
									{
										foreach($error as $error)
										{
											 ?>
											 <?php echo $error; ?>
											<?php
										}
									}
				else if(isset($_GET['joined']))
				{//se ha registrado el usuario muestro el boton  de iniciar sesion
				?>
					<section class="registered">
					 <p>Registrado correctamente</p> <a href='index.php'>LOGIN</a>
				 </section>
					 <?php
					}
					?>
				<section class="formato_suscribir">
					<!-- abro el form , codigo javascript onsbmit-->
					<form  method="post" id="suscribirse" name="suscribirse" onsubmit="return validacion()">

						<section class="suscribir">

								<label for="nombre">Nombre </label>
								<input type = "text" id = "nombre" name="nombre" />
						</section>
						<section class="suscribir">
								<label for="apellidos">Apellidos </label>
								<input type = "text" id = "apellidos" name="apellidos" />
						</section>
						<section class="suscribir">
								<label for="usuario">Nombre de usuario </label>
								<input type = "text" id = "nick" name="nick" />
						</section>
						<section class="suscribir">
								<label for="clave">Clave </label>
								<input type = "password" size="20" id = "clave" name="clave"/>
						</section>
						<section class="suscribir">
								<label for="dir_postal">Direccion postal</label>
								<input type = "text" id = "dir_postal" name="dir_postal"/>
						</section>
						<section class="suscribir">
								<label for="cod_postal">Codigo postal</label>
								<input type = "number" id = "cod_postal" name="cod_postal" size="5" maxlength="5" />
						</section>
						<section class="suscribir">
								<label for="provincia">Lista provincia</label> <select name = "provincia" >

									<option value="a coruna">a coruna</option>
									<option value="alava">alava</option>
									<option value="albacete">albacete</option>
									<option value="alicante">alicante</option>
									<option value="almeria">almeria</option>
									<option value="asturias">asturias</option>
									<option value="avila">avila</option>
									<option value="badajoz">badajoz</option>
									<option value="baleares">baleares</option>
									<option value="barcelona">barcelona</option>
									<option value="burgos">burgos</option>
									<option value="caceres">caceres</option>
									<option value="cadiz">cadiz</option>
									<option value="cantabria">cantabria</option>
									<option value="castellon">castellon</option>
									<option value="ceuta">ceuta</option>
									<option value="ciudad real">ciudad real</option>
									<option value="cordoba">cordoba</option>
									<option value="cuenca">cuenca</option>
									<option value="girona">girona</option>
									<option value="granada">granada</option>
									<option value="guadalajara">guadalajara</option>
									<option value="guipuzcoa">guipuzcoa</option>
									<option value="huelva">huelva</option>
									<option value="huesca">huesca</option>
									<option value="jaen">jaen</option>
									<option value="la rioja">la rioja</option>
									<option value="las palmas">las palmas</option>
									<option value="leon">leon</option>
									<option value="lleida">lleida</option>
									<option value="lugo">lugo</option>
									<option value="madrid">madrid</option>
									<option value="malaga">malaga</option>
									<option value="melilla">melilla</option>
									<option value="murcia">murcia</option>
									<option value="navarra">navarra</option>
									<option value="ourense">ourense</option>
									<option value="palencia">palencia</option>
									<option value="pontevedra">pontevedra</option>
									<option value="salamanca">salamanca</option>
									<option value="tenerife">tenerife</option>
									<option value="segovia">segovia</option>
									<option value="sevilla">sevilla</option>
									<option value="soria">soria</option>
									<option value="tarragona">tarragona</option>
									<option value="teruel">teruel</option>
									<option value="toledo">toledo</option>
									<option value="valencia">valencia</option>
									<option value="valladolid">valladolid</option>
									<option value="vizcaya">vizcaya</option>
									<option value="zamora">zamora</option>
									<option value="zaragoza">zaragoza</option>
								</select>
							</section>

							<section class="suscribir">
								<label for="email">email </label>
								<input type = "email" id = "email" name="email"/>
							</section>
							<section class="suscribir">
								<label for="dni">DNI </label>
								<input type = "number" id = "dni" name="dni" min="0" max="99999999" />
							</section>
							<section class="suscribir">
								<label for="visa1">VISA </label>
								<input type = "number" id = "visa1" name="visa1"min="0" max="9999"/>
								<input type = "number" id = "visa2" name="visa2"min="0" max="9999"/>
								<input type = "number" id = "visa3" name="visa3"min="0" max="99"/>
								<input type = "number" id = "visa4" name="visa4"min="0" max="9999999999"/>
							</section>
							<section class="suscribir">
								<label for="observaciones">Observaciones </label>
								<textarea id = "observaciones" name="observaciones" rows="5" cols="80"></textarea>
							</section>

							<section class="suscribir">
								<label for="envio ">Envio:</label>
								<label for="mensual">Mensual</label>
								<input type = "radio" id = "mensual" name="envio" value = "mensual" checked/>
								<label for="semanal">Semanal</label>
								 <input type = "radio" id = "semanal" name="envio" value = "semanal" />
								 <label for="diario">Diario</label>
								<input type = "radio" id = "diario" name="envio" value = "diario" />
							</section>

							<section class="suscribir">
								<label for = "chekCondiciones">He leido y acepto las condiciones del servicio de suscripcion</label>
								<input type = "checkbox" id = "checkCondiciones" name = "checkCondiciones"  value = "condiciones" />
								<input type = "submit" id = "suscribirse" name= "suscribirse" value = "suscribirse"/>
							</section>

					 </form>
					 <p id="demo"></p>
					 <!-- CIERRO EL FORM -->
				</section>
			<footer>
				<section class="foot">

				<p>Antonio Guzm&aacuten Mart&iacuten</p>
				<a href="mailto:songore@gmail.com">e-mail:songore@gmail.com</a><br>
				<a href="tel:958001234">T&eacutelefono:958001234</a><br>
				<a href="como_se_hizo.pdf">C&oacutemo se hizo</a>
				<p>Direcci&oacuten:Calle Periodista Saucedo Aranda s/n</p>
				</section>
			</footer>


	</body>

</html>
