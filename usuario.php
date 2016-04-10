<?php
	class Usuario{
		private $idUsuario;
		private $nombre;
		private $apellido;
		private $direccion;
		private $telefono;
		private $email;
		private $clave;
		private $usuario;
		private $fecha_creacion;
		private $fecha_mod;

		public function __construct(){

		}

		public function getIdUsuario(){
			return $this->idUsuario;
		}

		public function setIdUsuario($idUsuario){
			$this->idUsuario = $idUsuario;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
	}


?>