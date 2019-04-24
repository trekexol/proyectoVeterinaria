<h1>REGISTRO DE USUARIO</h1>

<form method="post" onsubmit="return validarRegistro()">
	
	<label for="nombreRegistro">Nombre<span></span></label>
	<input type="text" placeholder="Máximo 10 caracteres" maxlength="10" name="nombreRegistro" id="nombreRegistro" required>
	
	<label for="apellidoRegistro">Apellido<span></span></label>
	<input type="text" placeholder="Máximo 10 caracteres" maxlength="10" name="apellidoRegistro" id="apellidoRegistro" required>

	<label for="cedulaRegistro">Cedula<span></span></label>
	<input type="text" placeholder="Máximo 8 caracteres" maxlength="8" name="cedulaRegistro" id="cedulaRegistro" required>

	
	<label for="contrasenaRegistro">Contraseña</label>
	<input type="contrasena" placeholder="Mínimo 6 caracteres, incluir número(s) y una mayúscula" name="contrasenaRegistro" id="contrasenaRegistro" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required>

	<label for="contrasenaVerificacion">Repita la Contraseña</label>
	<input type="contrasena" placeholder="Mínimo 6 caracteres, incluir número(s) y una mayúscula" name="contrasenaVerificacion" id="contrasenaVerificacion" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required>

	<label for="emailRegistro">Correo electrónico<span></span></label>
	<input type="email" placeholder="Escriba su correo electrónico correctamente" name="emailRegistro" id="emailRegistro" required>

	<p style="text-align:center"><input type="checkbox" id="terminos"><a href="#">Acepta términos y condiciones</a></p>

	<input type="submit" value="Enviar">

</form>

<?php

$registro = new MvcController();
$registro -> registroUsuarioController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>
