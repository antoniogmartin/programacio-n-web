<?php

	require_once("sesion.php");
	require_once("class.disco.php");
	require_once("class.usuario.php");

if(isset($_POST['crear']))//si se ha mandado suscribirse
{
	$album= new DISCO();
	$nombre_disco = strip_tags($_POST['nombre_disco']);
	$autor = strip_tags($_POST['autor']);
	$genero = strip_tags($_POST['genero_disco']);
	$auth_usuario=new USUARIO();
	$album->newAlbum($nombre_disco,$autor,$genero);
//	$auth_usuario->redirect("formulario-disco.php");//tiene el objetivo de desactivar el POST_enviar al recargar*/


//correccion de errores
}?>

<script type="text/javascript">
function validacion() {//no funciona javascript
	var valor;
	var msg="";
	var res=true;
		valor = document.getElementById("nombre_disco").value;
		if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
			msg+="[ERROR] El campo nombre no puede estar vacio\n";
			res=false;
		}
		valor = document.getElementById("autor").value;
		if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
			msg+="[ERROR] El campo autor no puede estar vacio\n";
			res=false;
		}
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
					<h1>Creaci&oacuten de nuevo disco</h1>

					</section>

				<section class="formato_crear_disco">
					<!-- abro el form -->
					<form  id="album-form" name="album-form" method="post" onsubmit="return validacion()" >
								<?php
								/*	if(isset($error))
													{
														foreach($error as $error)
														{
															 ?>
															 <?php echo $error; ?>
															<?php
														}
													}*/
		                      ?>
								<section class="suscribir">

										<label for="nombre_disco">Nombre del disco</label>
										<input type = "text" id = "nombre_disco" name="nombre_disco" />
								</section>
								<section class="suscribir">
										<label for="autor">Autor: </label>
										<input type = "text" id = "autor" name="autor"/>
								</section>
								<section class="suscribir">
										<label for="genero_disco">G&eacutenero del disco</label> <select name = "genero_disco" >
											<option value="rock">Rock</option>
											<option value="edm">Edm</option>
											<option value="reggaeton">Reggaeton</option>
										</select>
									</section>
									<section class="suscribir">
										<input type = "submit" id = "crear" name= "crear" value = "crear" />
									</section>
					 </form>
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
