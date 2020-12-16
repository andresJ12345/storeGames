<?php
	require_once "apps/controller/controllerMain.php";
	require_once "apps/controller/controllerUser.php";

	require_once "apps/model/usuarios.php";
	require_once "apps/model/juegos.php";
	$Main  = new ControllerMain();
	$Main->Main();
