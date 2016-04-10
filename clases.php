<?php
	include_once "modelo/usuario.php";

	$usuario = new Usuario();
	$usuario->setIdUsuario(1);
	$usuario->setNombre("Mario");
	echo $usuario->getIdUsuario()." ".$usuario->getNombre();
