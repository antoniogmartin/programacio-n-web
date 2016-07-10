<?php
	session_start();
	require_once("../class.usuario.php");
	require_once("../class.disco.php");
	$auth_usuario = new USUARIO();//usuario autenticado
	$albums= new DISCO();//nuevos discos


?>

<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Songore</title>
		<link rel="stylesheet" href="../style_music.css">

	</head>

	<body>

			<header>

				<h1><img src="../songore.png" width='50' height='50' />Songore</h1>

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
							                            <a href="../index.php" >HOME</a>
							                        </td>
							                        <td class="secciones"style="background-color: lightblue">
							                             <a href="../rock/rock.php">ROCK</a>
							                        </td>
							                        <td class="secciones"style="background-color: lightgreen">
							                             <a href="../reggaeton/reggaeton.php" >REGGAETON</a>
							                        </td>
							                        <td class="secciones"style="background-color: #ff3333">
							                             <a href="../edm/edm.php">EDM</a>
							                        </td>
							                        <td class="secciones" style="background-color: #fAA223">
							                             <a href="../suscribirse.php">SUSCRIBIRSE</a>
							                        </td>
							                       <td class="secciones" style="background-color: white">
							                             <a href="../index.php">M&AacuteS VENDIDOS</a>
							                        </td>
							                        <td class="secciones" style="background-color: lightpink">
							                             <a href="../index.php">M&AacuteS COMENTADOS</a>
							                        </td>

							                    </tr>

							                </thead>
							</table>
				</section>

			    <section class="ad_tab"><img src="../fast_ssd_ad.jpeg" alt="fats ssd">
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
					        				<img src="../edm/galantis_no_money_20160331/galantis_no_money_20160331.jpeg" alt="no_money_galantis" width='60' height='70'>
					        				</td></tr>
					        				<tr><td><p>Disco:No money</p></td></tr>
					        				<tr><td><p>Autor:Galantis</p></td>
					        				<td><a href="../edm/armin_van_buuren_embrace_20151029/armin_van_buuren_embrace_20151029.php"><p>ver</p></a></td>
					        				<td>
						        				<a href="../broke-for-free.mp3" target="_blank"><img src="../play.png" width='28' height='25'></a>
						        				</td>
					        				</tr>

					        			</tbody>

					        </table>
				        </td></tr>
			  			<tr><td>
					  		 <table class="disco">
						        			<tbody>
						        				<tr><td>
						        				<img src="../edm/mat_zo_self_assemble_20160325/mat_zo_self_assemble_20160325.jpeg" width='60' height='70' alt="self_assemble">
						        				</td></tr>
						        				<tr><td><p>Disco:Self assemble</p></td></tr>
						        				<tr><td><p>Autor:Mat Zo</p></td>
						        				<td><a href="../edm/armin_van_buuren_embrace_20151029/armin_van_buuren_embrace_20151029.php"><p>ver</p></a></td>
						        				<td>
						        				<a href="../broke-for-free.mp3" target="_blank"><img src="../play.png" width='28' height='25'></a>
						        				</td>
						        				</tr>

						        			</tbody>

						        </table>
					     </td></tr>
					     <tr><td>
						       <table class="disco">
						        			<tbody>
						        				<tr><td>
						        				<img src="../edm/alan_walker_faded_20151203/alan_walker_faded_20151203.jpeg" width='70' height='70' alt="self_assemble">
						        				</td></tr>
						        				<tr><td><p>Disco:Faded</p></td></tr>
						        				<tr><td><p>Autor:Alan Walker</p></td>
						        				<td><a href="../edm/armin_van_buuren_embrace_20151029/armin_van_buuren_embrace_20151029.php"><p>ver</p></a></td>
						        				<td>
						        				<a href="../broke-for-free.mp3" target="_blank"><img src="../play.png" width='28' height='25'></a>
						        				</td>
						        				</tr>

						        			</tbody>

						      	</table>
					      </td></tr>
					      <tr><td>
						      	<table class="disco">
						        			<tbody>
						        				<tr><td>
						        				<img src="../edm/taival_frostbite_20160302/taival_frostbite_20160302.jpeg" width='60' height='70' alt="self_assemble">
						        				</td></tr>
						        				<tr><td><p>Disco:Frostbite</p></td></tr>
						        				<tr><td><p>Autor:Taival</p></td>
						        				<td><a href="../edm/armin_van_buuren_embrace_20151029/armin_van_buuren_embrace_20151029.php"><p>ver</p></a></td>
						        				<td>
						        				<a href="../broke-for-free.mp3" target="_blank"><img src="../play.png" width='28' height='25'></a>
						        				</td>
						        				</tr>

						        			</tbody>

						      	</table>
					      	</td></tr>

					   </tbody>

	             </table>

				</aside>

					<section class="genero">
					<img src="reggaeton.jpeg" alt="reggaeton"><h1>Reggaeton</h1>

					</section>



				<section class="mas_vendido">

				<h4>M&aacutes vendido</h4>
				<img src="./nicky_jam_hasta_el_amanecer_20160115/nicky_jam_hasta_el_amanecer_20160115.jpg" alt:"hasta el amanecer">
				<section class="descripcion">
					<p>Disco: Hasta el amanecer</p>
					<p> Autor: Alan Walker</p>
					<a href="./cali_el_dandee_juan_magan_por_fin_te_encontre_20150925/cali_el_dandee_juan_magan_por_fin_te_encontre_20150925.php"><p>ver</p></a>
					<section class="comentario_mas_vendido"><p>45 comentarios</p></section>
				</section>

				</section>




					<table class="seleccion_discos">
						<tbody>
						<tr>
							<td>
								<table class="disco">
								        			<tbody>
								        				<tr><td>
								        				<img src="./nicky_jam_hasta_el_amanecer_20160115/nicky_jam_hasta_el_amanecer_20160115.jpg" width='60' height='70'>
								        				</td></tr>
								        				<tr><td><p>Disco:Por Fin te encontre</p></td></tr>
								        				<tr><td><p>Autor:Cali, El dandee, Juan Magan</p></td></tr>
								        				<tr>
									        				<td><section class="comentario"><p>8 comentarios</p></section></td>
									        				<td><a href="./cali_el_dandee_juan_magan_por_fin_te_encontre_20150925/cali_el_dandee_juan_magan_por_fin_te_encontre_20150925.php"><p>ver</p></a></td>

								        				</tr>


								        			</tbody>

								</table>
							</td>
							<td>
								<table class="disco">
								        			<tbody>
								        				<tr><td>
								        				<img src="./nicky_jam_hasta_el_amanecer_20160115/nicky_jam_hasta_el_amanecer_20160115.jpg" width='60' height='70'>
								        				</td></tr>
														<tr><td><p>Disco:Mayor que yo 3</p></td></tr>
								        				<tr><td><p>Autor:Luny Tunes,Daddy Yakee</p></td></tr>
								        				<tr>
									        				<td><section class="comentario"><p>8 comentarios</p></section></td>
									        				<td><a href="./cali_el_dandee_juan_magan_por_fin_te_encontre_20150925/cali_el_dandee_juan_magan_por_fin_te_encontre_20150925.php"><p>ver</p></a></td>

								        				</tr>
								        			</tbody>

								</table>
							</td></tr>
						<tr>
							<td><table class="disco">
								        			<tbody>
								        				<tr><td>
								        				<img src="./nicky_jam_hasta_el_amanecer_20160115/nicky_jam_hasta_el_amanecer_20160115.jpg" width='60' height='70'>
								        				</td></tr>
														<tr><td><p>Disco:Traidora</p></td></tr>
								        				<tr><td><p>Autor:Gente de Zona </p></td></tr>
								        				<tr>
									        				<td><section class="comentario"><p>8 comentarios</p></section></td>
									        				<td><a href="./cali_el_dandee_juan_magan_por_fin_te_encontre_20150925/cali_el_dandee_juan_magan_por_fin_te_encontre_20150925.php"><p>ver</p></a></td>

								        				</tr>


								        			</tbody>

							</table>  </td>
							<td>
								<table class="disco">
									        			<tbody>
									        				<tr><td>
									        				<img src="./nicky_jam_hasta_el_amanecer_20160115/nicky_jam_hasta_el_amanecer_20160115.jpg" width='60' height='70'>
									        				</td></tr>
															<tr><td><p>Disco:Ginza</p></td></tr>
									        				<tr><td><p>Autor:J. Balvin</p></td></tr>
									        				<tr>
										        				<td><section class="comentario"><p>16 comentarios</p></section></td>
										        				<td><a href="./cali_el_dandee_juan_magan_por_fin_te_encontre_20150925/cali_el_dandee_juan_magan_por_fin_te_encontre_20150925.php"><p>ver</p></a></td>

									        				</tr>
									        			</tbody>

								</table>
							</td>
						</tr>
						<tr>
						<td><table class="disco">
							        			<tbody>
							        				<tr><td>
							        				<img src="./nicky_jam_hasta_el_amanecer_20160115/nicky_jam_hasta_el_amanecer_20160115.jpg" width='60' height='70'>
									        		</td></tr>
													<tr><td><p>Disco:Te busco</p></td></tr>
									        		<tr><td><p>Autor:Nicky Jam </p></td></tr>
									        		<tr>
								        				<td><section class="comentario"><p>8 comentarios</p></section></td>
								        				<td><a href="./cali_el_dandee_juan_magan_por_fin_te_encontre_20150925/cali_el_dandee_juan_magan_por_fin_te_encontre_20150925.php"><p>ver</p></a></td>

							        				</tr>
							        			</tbody>

						</table></td>
						<td><table class="disco">
							        			<tbody>
							        				<tr><td>
							        				<img src="./nicky_jam_hasta_el_amanecer_20160115/nicky_jam_hasta_el_amanecer_20160115.jpg" width='60' height='70'>
									        		</td></tr>
													<tr><td><p>Disco:J. Balvin</p></td></tr>
									        		<tr><td><p>Autor:Tranquila </p></td></tr>
									        		<tr>
								        				<td><section class="comentario"><p>8 comentarios</p></section></td>
								        				<td><a href="./cali_el_dandee_juan_magan_por_fin_te_encontre_20150925/cali_el_dandee_juan_magan_por_fin_te_encontre_20150925.php"><p>ver</p></a></td>

							        				</tr>
							        			</tbody>

						</table></td></tr>
						<?php
							$genero="reggaeton";
							$resConsulta=$albums->showAlbums($genero);
							$i=0;
							foreach($resConsulta as $rows) {
								$nombre_disco= $rows['nombre_disco'];
								$autor= $rows['autor'];
								$i=$i+1;//esto es para que se impre tr cada 2 discos.
								if($i==1){ echo "<tr>";}
								?>

								<td>
								<table class="disco">
									<tbody>
									<tr><td>
									<img src="./nicky_jam_hasta_el_amanecer_20160115/nicky_jam_hasta_el_amanecer_20160115.jpg" width='60' height='70'>
									</td></tr>
									<tr><td><p><?php echo "Disco: ".$nombre_disco; ?></p></td></tr>
									<tr><td><p><?php echo "Autor: ".$autor; ?></p></td></tr>
									<td><section class="comentario"><p>15 comentarios</p></section></td>
									<td><a href="./cali_el_dandee_juan_magan_por_fin_te_encontre_20150925/cali_el_dandee_juan_magan_por_fin_te_encontre_20150925.php"><p>ver</p></a></td>
								</tbody>
							</table>
							</td>

								<?php
								if($i==2){
									echo "</tr>";
									$i=0;
								}

							}
					 ?>
						</tbody>
					</table>
				</section>
		</section>






			<footer>
				<section class="foot">

				<p>Antonio Guzm&aacuten Mart&iacuten</p>
				<a href="mailto:songore@gmail.com">e-mail:songore@gmail.com</a><br>
				<a href="tel:958001234">T&eacutelefono:958001234</a><br>
				<a href="../como_se_hizo.pdf">C&oacutemo se hizo</a>
				<p>Direcci&oacuten:Calle Periodista Saucedo Aranda s/n</p>
				</section>
			</footer>


	</body>

</html>
