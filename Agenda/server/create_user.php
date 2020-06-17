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
		$conexion = new mysqli('localhost:3308','root','123456','agenda_db');
		if($conexion->connect_error){
			printf('Se ha producido un error en la conexión'. $conexion->connect_error)
		}else{
			printf('Conexion Exitosa');
		}
	}


}


$Crear = new usuario();
printf($Crear->CrearUsuario());


 ?>
