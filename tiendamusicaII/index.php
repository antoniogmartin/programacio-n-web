<?php
session_start();
require_once("class.usuario.php");
$login = new USUARIO();

if($login->is_loggedin()!="")//si esta logueado
{
	$login->redirect('home.php');
}

if(isset($_POST['acceder']))
{
	$unick = strip_tags($_POST['nick']);
  $upass = strip_tags($_POST['clave']);

	if($login->doLogin($unick,$upass))
	{
		$login->redirect('home.php');//pagina de datos autentificados
	}
	else
	{
		$error = "Datos erroneos !";
	}
}
?>

<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Songore</title>
		<!-- <link rel="stylesheet" href="style_music.css"> -->
		<meta name="viewport"
		content="width=device-width,minimum-scale=1.0,maximun-scale=1.0"/>
		<link href="style_music.css" rel="stylesheet" media="screen">


	</head>

	<body>

			<header>

				<h1><img src="songore.png" width='50' height='50' />Songore</h1>
				<?php
				if(isset($error))
				{
						?>

					<section class="error_login">
						 <p><?php echo $error; ?></p>
					</section>

				<?php
				}
				?>
				<section class="id_form">
          <form  method="post" id="login-form">
						<label for="nick">Usuario:</label>
							<input type = "text" id = "nick" name="nick" />
							<label for="clave">Password:</label>
							<input type = "password" id = "clave" name="clave" />
							<input type = "submit" id = "acceder" name="acceder" value = "acceder"/>
	          </form>

				</section>


            </header>



			 <section class="main">
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

					<section class="novedad">

						<section class="disco_novedad" id="disco_novedad1" >
							<section class="comentario"><p>15 comentarios</p></section>
							<audio src="broke-for-free.mp3" controls>
								<a href = "broke-for-free.mp3"> Canción New York, New York</a>
							</audio>


						</section>

						<section class="disco_novedad" id="disco_novedad2">
							<section class="comentario"><p>15 comentarios</p></section>
							<audio src="broke-for-free.mp3" controls>
								<a href = "broke-for-free.mp3"> Canción New York, New York</a>
							</audio>


						</section>
						<section class="disco_novedad" id="disco_novedad3">
							<section class="comentario"><p>15 comentarios</p></section>
							<audio src="broke-for-free.mp3" controls>
								<a href = "broke-for-free.mp3"> Canción New York, New York</a>
							</audio>


						</section>

					</section>

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
							                        </td>
							                        <td class="secciones" id="seccion1"style="background-color: white">
							                             <a href="index.php" id="seccion2">M&AacuteS VENDIDOS</a>
							                        </td>
							                        <td class="secciones" style="background-color: lightpink">
							                             <a href="index.php">M&AacuteS COMENTADOS</a>
							                        </td>


							                    </tr>

							                </thead>
							</table>
				</section>

			<section class="cuadros">
				<section class="noticias">
			        <h2>Noticias</h2>
			        	 <article >

			                    <p>Nuevo concierto de Coldplay en Barcelona:
			                    	La banda britanica ofrecerá un nuevo espectáculo con motivo de su ultimo disco...
			                    </p>
			                    	<a href="index.php"><p>m&aacutes</p></a>

		                    	<p>The last Shadow Puppets comparten "Miracle Aligner": Este mismo viernes el
		                    	que será su segundo trabajo conjunto...</p>
		                    	<a href="index.php"><p>m&aacutes</p></a>

		                    	<a href="index.php"><p>Canciones 2016: La playlist de la semana XII</p></a>

		                   </article>


			        </section>
			 <section class="noticias">
			        <h2>Discos m&aacutes comentados</h2>
			        	 <ol>
							<li>Hasta el amanecer</li>
							<li>Faded</li>
							<li>Embrance</li>
							<li>Por fin te encontr&eacute</li>
							<li>No money</li>
							<li>A Head full of dreams</li>
							<li>Unapologetic</li>
							<li>Sex with me</li>
						</ol>


			        </section>



				<section class="noticias">
				<h2>Disco destacado</h2>
				    <table class="disco">
					        			<tbody>
					        				<tr><td>
					        				<img src="./reggaeton/nicky_jam_hasta_el_amanecer_20160115/nicky_jam_hasta_el_amanecer_20160115.jpg" width='60' height='70'>
					        				</td></tr>
					        				<tr><td><p>Disco:Hasta el Amanecer</p></td></tr>
					        				<tr><td><p>Autor:Nicky Jam </p></td>
					        				<td><a href="./reggaeton/cali_el_dandee_juan_magan_por_fin_te_encontre_20150925/cali_el_dandee_juan_magan_por_fin_te_encontre_20150925.php"><p>ver</p></a></td>

					        				<td>
						        				<a href="broke-for-free.mp3" target="_blank"><img src="play.png" width='28' height='25'></a>
						        			</td>
					        				</tr>

					        			</tbody>

					        		</table>



				</section>

				<section class="noticias">
				        <h2>Discos m&aacutes comentados del mes</h2>
				        	<ol>

								<li>Hasta el amanecer</li>
								<li>Por fin te encontr&eacute</li>
								<li>Sex with me</li>
								<li>No money</li>
								<li>A Head full of dreams</li>
								<li>Unapologetic</li>
								<li>Embrace</li>


							</ol>


				</section>
			</section>




			        <section class="ult_disc">
			        		<h2>Ultimos discos por genero</h2>
			        		<section class="categoria"><a href="./rock/rock.php"><h3>ROCK</h3></a></section>

			        		<section class="categoria"><a href="./reggaeton/reggaeton.php"><h3>REGGAETON</h3></a></section>
			        		<section class="categoria"><a href="./edm/edm.php"><h3>EDM</h3></a></section>

			        	<section class="ult_disc_detalle">
					        	<table class="disco">
					        		<thead></thead>
					        		<tbody>
					        			<tr><td>
					        				<img src="./rock/rihanna_unapologetic_20121119/rihanna_unapologetic_20121119.jpg" alt="unapologetic" width='60' height='70'>
					        			</td></tr>
					        				<tr><td><p>Disco: Unapologetic</p></td></tr>
					        				<tr><td><p>Autor: Rihanna</p></td>
					        				<td><a href="./rock/coldplay_a_head_full_20151204/coldplay_a_head_full_20151204.php"><p>ver</p></a></td>
					        				<td>
						        				<a href="broke-for-free.mp3" target="_blank"><img src="play.png" width='28' height='25'></a>
						        				</td>
					        				</tr>

					        		</tbody>
					        	</table>


				        		<table class="disco">
				        			<tbody>
				        				<tr><td>
				        				<img src="./rock/coldplay_a_head_full_20151204/coldplay_a_head_full_20151204.jpg" alt="head_full_of_dreams" width='60' height='70'>
				        				</td></tr>
				        				<tr><td><p>Disco:A head full of dreams</p></td></tr>
				        				<tr><td><p>Autor:Coldplay</p></td>
				        				<td><a href="./rock/coldplay_a_head_full_20151204/coldplay_a_head_full_20151204.php"><p>ver</p></a></td>
					        				<td>
						        				<a href="broke-for-free.mp3" target="_blank"><img src="play.png" width='28' height='25'></a>
						        			</td>
				        				</tr>

				        			</tbody>

				        		</table>
				        		<table class="disco">
				        			<tbody>
				        				<tr><td>
				        				<img src="./reggaeton/nicky_jam_hasta_el_amanecer_20160115/nicky_jam_hasta_el_amanecer_20160115.jpg" width='60' height='70'>
				        				</td></tr>
				        				<tr><td><p>Disco:Hasta el Amanecer</p></td></tr>
				        				<tr><td><p>Autor:Nicky Jam </p></td>
				        				<td><a href="./reggaeton/cali_el_dandee_juan_magan_por_fin_te_encontre_20150925/cali_el_dandee_juan_magan_por_fin_te_encontre_20150925.php"><p>ver</p></a></td>
					        				<td>
						        				<a href="broke-for-free.mp3" target="_blank"><img src="play.png" width='28' height='25'></a>
						        			</td>

				        				</tr>

				        			</tbody>

				        		</table>

				     </section>
				  </section>

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
