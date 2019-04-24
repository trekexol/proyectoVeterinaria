<?php

require_once "../../controllers/controller.php";
require_once "../../models/crud.php";

class Ajax{

	public $validarNombre;
	public $validarEmail;

	public function validarNombreAjax(){

		$datos = $this->validarNombre;

		$respuesta = MvcController::validarUsuarioController($datos); 

		echo $respuesta;

	}

	public function validarEmailAjax(){

		$datos = $this->validarEmail;

		$respuesta = MvcController::validarEmailController($datos); 

		echo $respuesta;

	}

}

if(isset( $_POST["validarNombre"])){
	
	$a = new Ajax();
	$a -> validarNombre = $_POST["validarNombre"];
	$a -> validarNombreAjax();

}

if(isset( $_POST["validarEmail"])){

	$b = new Ajax();
	$b -> validarEmail = $_POST["validarEmail"];
	$b -> validarEmailAjax();

}

