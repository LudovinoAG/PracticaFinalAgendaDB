<?php

class usuario{

	private email;
	private password;
	public nombre_completo;
	public fecha_nacimiento;
	public fk_evento;

	function __constructor($email,$password,$nombre_completo,$fecha_nacimiento,$fk_evento){
		$this->email = $email;
		$this->password = $password;
		$this->nombre_completo = $nombre_completo;
		$this->fecha_nacimiento = $fecha_nacimiento;
		$this->fk_evento = $fk_evento;
	}


	function CrearUsuario(){
		$conexion = new mysqli('localhost:3308')
	}


}




 ?>
