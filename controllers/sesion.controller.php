<?php 


Class ControllerSesion {

	public function iniciarSesionCtr() {

		if (isset($_POST["user"])) {
			$tabla = "usuarios";
			$usuario = $_POST["user"];

			$respuesta = ModeloSesion::iniciarSesionMdl($tabla, $usuario);
			
			if($respuesta["user"] == $_POST["user"] && $respuesta["password"] == $_POST["password"]) {

				$_SESSION["autenticar"] = "ok";
				$_SESSION["nombre"] = $respuesta["nombre"];
				$_SESSION["apellido"] = $respuesta["apellido"];
				
				$_SESSION["id"] = $respuesta["id_usuario"];
				$_SESSION["rol"] = $respuesta["rol"];

				echo '
					<script>
						window.location = "home"
					</script>
				';

			} else {
				echo '
					<div class="alert alert-danger">
						Datos incorrectos. Inténtelo nuevamente.
					</div>	
				';
			}
		}
	}
}

?>