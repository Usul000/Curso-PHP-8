<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario simple</title>
	<style>
		body{ font-family: Arial; }
		form{
			background-color: #f2f2f2;
			padding: 15px;
			width: 300px;
			margin: 50px auto;
		}
		.error{ background-color: #FF9185; padding: 10px; font-size: 13px; }
		.correcto{ background-color: #A0DEA7; padding: 10px; font-size: 13px; }
	</style>
</head>
<body>

	<form action="#" method="POST">
		<?php
			$nombre = "";
			$email = "";

			if(isset($_POST['nombre'])){
				$nombre = $_POST['nombre'];
				$email = $_POST['email'];

				$errores = array();

				if($nombre == ""){
					$errores[] = "El nombre no puede estar vacío";
				}

				if($email == "" || strpos($email, "@") === false){
					$errores[] = "Ingresa un correo válido";
				}

				if(count($errores) > 0){
					echo "<div class='error'>";
					foreach($errores as $e){
						echo $e."<br>";
					}
					echo "</div>";
				}else{
					echo "<div class='correcto'>Datos correctos</div>";
				}
			}
		?>

		<p>
			Nombre:<br>
			<input type="text" name="nombre" value="<?php echo $nombre; ?>">
		</p>

		<p>
			Email:<br>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</p>

		<p>
			<input type="submit" value="Enviar">
		</p>
	</form>

</body>
</html>