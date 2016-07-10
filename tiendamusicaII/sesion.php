<?php

	session_start();

	require_once 'class.usuario.php';
	$sesion = new USUARIO();




	if(!$sesion->is_loggedin())
	{
			$sesion->redirect('/tiendamusicaII/index.php');//se evita con este archivo acceder a home.php sin iniciar sesión
	}
