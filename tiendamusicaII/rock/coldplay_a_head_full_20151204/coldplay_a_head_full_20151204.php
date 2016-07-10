<?php
	//require_once("../../sesion.php");
	session_start();
	require_once("../../class.usuario.php");
	require_once("../../class.comentario.php");
	$auth_usuario = new USUARIO();//usuario autenticado
	if($auth_usuario->is_loggedin()!="")//si no esta logueado
	{
		$nick = $_SESSION['usuario_sesion'];
		$stmt = $auth_usuario->runQuery("SELECT * FROM usuario WHERE nick=:nick");
		$stmt->execute(array(":nick"=>$nick));
		$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
		$new_comment= new COMENTARIO;
		if(isset($_POST['enviar']))
		{
			$ctexto = strip_tags($_POST['comentarios']);
			$timezone = date_default_timezone_get();
		  date_default_timezone_set($timezone);
		  $cfecha = date('Y/m/d', time());
		  $chora = date('H:i:s',time());
			$cgenero="rock";
			$new_comment->makeComment($nick,$cfecha,$chora,$cgenero,$ctexto);
			$auth_usuario->redirect("coldplay_a_head_full_20151204.php");//tiene el objetivo de desactivar el POST_enviar al recargar
		}
	}


?>
<script type="text/javascript">

function validacion() {
	var valor;
	var msg="";
	var res=true;
		valor = document.getElementById("comentarios").value;
		if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
			msg+="[ERROR] El campo texto no puede estar vacio\n";
			res=false;
		}
		if(!res){
			alert(msg);
		}
		return res;

	}
	function show_list_album()
	{
	miVentana=window.open("","miVentana","width=200,height=300");
	miVentana.document.write("<p>A head full of dreams</p>");
	miVentana.document.write("<p>Birds</p>");
	miVentana.document.write("<p>Hymn for the weekend</p>");
	miVentana.document.write("<p>Adventure of lifetime</p>");
	miVentana.document.write("<p>Everglow</p>");
	miVentana.document.write("<p>Fun</p>");
	miVentana.document.write("<p style='color:red;font-weight:bold;'>Click en imagen para cerrar</p>");
	}

	function hide_list_album()
	{
	miVentana.close();
	}

</script>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Songore</title>
		<link rel="stylesheet" href="../../style_music.css">

	</head>

	<body>

			<header>

				<h1><img src="../../songore.png" width='50' height='50' />Songore</h1>

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
							                            <a href="../../index.php" >HOME</a>
							                        </td>
							                        <td class="secciones"style="background-color: lightblue">
							                             <a href="../rock.php">ROCK</a>
							                        </td>
							                        <td class="secciones"style="background-color: lightgreen">
							                             <a href="../../reggaeton/reggaeton.php" >REGGAETON</a>
							                        </td>
							                        <td class="secciones"style="background-color: #ff3333">
							                             <a href="../../edm/edm.php">EDM</a>
							                        </td>
							                        <td class="secciones" style="background-color: #fAA223">
							                             <a href="../../suscribirse.php">SUSCRIBIRSE</a>
							                        </td>
							                        <td class="secciones" style="background-color: white">
							                             <a href="../../index.php">M&AacuteS VENDIDOS</a>
							                        </td>
							                        <td class="secciones" style="background-color: lightpink">
							                             <a href="../../index.php">M&AacuteS COMENTADOS</a>
							                        </td>


							                    </tr>

							                </thead>
							</table>
				</section>

			    <section class="ad_tab"><img src="../../fast_ssd_ad.jpeg" alt="fats ssd">
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
					        				<img src="../../edm/galantis_no_money_20160331/galantis_no_money_20160331.jpeg" alt="no_money_galantis" width='60' height='70'>
					        				</td></tr>
					        				<tr><td><p>Disco:No money</p></td></tr>
					        				<tr><td><p>Autor:Galantis</p></td>
					        				<td><a href="../../edm/armin_van_buuren_embrace_20151029/armin_van_buuren_embrace_20151029.php"><p>ver</p></a></td>
					        				<td>
						        				<a href="../../broke-for-free.mp3" target="_blank"><img src="../../play.png" width='28' height='25'></a>
						        				</td>
					        				</tr>

					        			</tbody>

					        </table>
				        </td></tr>
			  			<tr><td>
					  		 <table class="disco">
						        			<tbody>
						        				<tr><td>
						        				<img src="../../edm/mat_zo_self_assemble_20160325/mat_zo_self_assemble_20160325.jpeg" width='60' height='70' alt="self_assemble">
						        				</td></tr>
						        				<tr><td><p>Disco:Self assemble</p></td></tr>
						        				<tr><td><p>Autor:Mat Zo</p></td>
						        				<td><a href="../../edm/armin_van_buuren_embrace_20151029/armin_van_buuren_embrace_20151029.php"><p>ver</p></a></td>
						        				<td>
						        				<a href="../../broke-for-free.mp3" target="_blank"><img src="../../play.png" width='28' height='25'></a>
						        				</td>
						        				</tr>

						        			</tbody>

						        </table>
					     </td></tr>
					     <tr><td>
						       <table class="disco">
						        			<tbody>
						        				<tr><td>
						        				<img src="../../edm/alan_walker_faded_20151203/alan_walker_faded_20151203.jpeg" width='70' height='70' alt="self_assemble">
						        				</td></tr>
						        				<tr><td><p>Disco:Faded</p></td></tr>
						        				<tr><td><p>Autor:Alan Walker</p></td>
						        				<td><a href="../../edm/armin_van_buuren_embrace_20151029/armin_van_buuren_embrace_20151029.php"><p>ver</p></a></td>
						        				<td>
						        				<a href="../../broke-for-free.mp3" target="_blank"><img src="../../play.png" width='28' height='25'></a>
						        				</td>
						        				</tr>

						        			</tbody>

						      	</table>
					      </td></tr>
					      <tr><td>
						      	<table class="disco">
						        			<tbody>
						        				<tr><td>
						        				<img src="../../edm/taival_frostbite_20160302/taival_frostbite_20160302.jpeg" width='60' height='70' alt="self_assemble">
						        				</td></tr>
						        				<tr><td><p>Disco:Frostbite</p></td></tr>
						        				<tr><td><p>Autor:Taival</p></td>
						        				<td><a href="../../edm/armin_van_buuren_embrace_20151029/armin_van_buuren_embrace_20151029.php"><p>ver</p></a></td>
						        				<td>
						        				<a href="../../broke-for-free.mp3" target="_blank"><img src="../../play.png" width='28' height='25'></a>
						        				</td>
						        				</tr>

						        			</tbody>

						      	</table>
					      	</td></tr>

					   </tbody>

	             </table>

				</aside>

					<section class="genero">
					<img src="../rock.jpg" alt="rock_n_roll"><h1>Rock</h1>

					</section>

				<section class="disco_ampliado">
					<h1>A head full of dreams</h1>

					</section>

				<section class="album">
					<h2>Coldplay</h2>
						<table class="info_disco">
							<tbody>
							<tr>
								<td><img  src="coldplay_a_head_full_20151204.jpg" onmouseover="show_list_album()" onclick="hide_list_album()"></td></tr>

								<tr>
									<td>
										<table class="datos_disco">
											<tbody>
											<tr><td><p>Genero:Rock</p></td></tr>
											<tr><td><p>Precio: 9,99€</p></td></tr>
											<tr><td><p>Producido: Parlophone</p></td></tr>
											<tr><td><p>Valoraci&oacuten</p></td></tr>
											<tr><td><img src="../../3_star.png" style="width: 100px"></td></tr>
											</tbody>
										</table>
									</td>
								</tr>

							</tbody>
						</table>
						<table class="pista">
								<tbody>
									<tr>
										<td>
											<input type="radio" id="pista1" name="pista_full_of_dreams" value="pista1" checked>
										</td>
										<td>
											<label for "pista1">A head full of dreams</label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="radio" id="pista2" name="pista_full_of_dreams" value="pista2" >
										</td>
										<td>
											<label for "pista2"> Birds </label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="radio" id="pista3" name="pista_full_of_dreams" value="pista3">
										</td>
										<td>
											<label for "pista3">Hymn for the Weekend </label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="radio" id="pista4" name="pista_full_of_dreams" value="pista4">
										</td>
										<td>
											<label for "pista4"> Adventure of a lifetime </label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="radio" id="pista5" name="pista_full_of_dreams" value="pista5">
										</td>
										<td>
											<label for "pista5"> Everglow </label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="radio" id="pista6" name="pista_full_of_dreams" value="pista6">
										</td>
										<td>
											<label for "pista6"> Fun </label>
										</td>
									</tr>
								</tbody>
							</table>
							<section class="opciones_disco">
							<section class="comentario"><p><?php
							if($auth_usuario->is_loggedin()!=""){echo $new_comment->countComments("rock");}
							else{
								echo "15";
							}
							?> comentarios</p></section>
							<input type="submit" id="button_buy" value="Comprar">
							<a href="../../broke-for-free.mp3" target="_blank"><img src="../../play.png" width='28' height='25'></a>
							</td></section>
							<?php if($auth_usuario->is_loggedin()!=""){
								?>
										<form class="comentar" id="comment-form" method="post" onsubmit="return validacion()">
												<label for="comentarios">Comenta algo: </label>
												<textarea id = "comentarios" name="comentarios" rows="5" cols="60"></textarea>

												<input type = "submit" id = "enviar" name= "enviar" value = "enviar"/>
										</form>
							<?php
								$resConsulta=$new_comment->showComments("rock");
									foreach($resConsulta as $rows) {
										$hora = $rows['hora'];
										$fecha= $rows['fecha'];
										$texto = $rows['texto'];
										$nick = $rows['nick'];
										?>
										<section class="texto_comentario">
										<?php  	echo $fecha.' '.$hora.' - '.$nick."<br>".$texto."<br>";
											?>
										</section>
										<?php
									}
								}
							 ?>


				</section>







				</section>






			<footer>
				<section class="foot">

				<p>Antonio Guzm&aacuten Mart&iacuten</p>
				<a href="mailto:songore@gmail.com">e-mail:songore@gmail.com</a><br>
				<a href="tel:958001234">T&eacutelefono:958001234</a><br>
				<a href="../../como_se_hizo.pdf">C&oacutemo se hizo</a>
				<p>Direcci&oacuten:Calle Periodista Saucedo Aranda s/n</p>
				</section>
			</footer>


	</body>

</html>
