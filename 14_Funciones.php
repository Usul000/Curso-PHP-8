<?php

	function multiplicar($n1, $n2){
		return $n1 * $n2;
	}

	function esNumero($n1, $n2){
		if(is_numeric($n1) && is_numeric($n2)){
			return true;
		}else{
			return false;
		}
	}

	function mostrarError(){
		echo "<span class='error'>Ingresa solo números</span>";
	}

	function validarCampos(){
		if(isset($_POST['numero01']) && isset($_POST['numero02'])){
			$n1 = $_POST['numero01'];
			$n2 = $_POST['numero02'];

			if(esNumero($n1, $n2)){
				echo multiplicar($n1, $n2);
			}else{
				mostrarError();
			}
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funciones</title>
	<style>
		body{background-color: #5492D1; font-family: Arial;}
		#container{background: white; padding: 10px; width: 400px; margin: 150px auto;}
		.error{color: red;}
	</style>
</head>
<body>
	<div id="container">
		<h2>Multiplicaciones</h2>
		<form action="" method="POST">
			<input type="text" name="numero01">
			<input type="text" name="numero02">

			<input type="submit" value="Calcular">
		</form>

		<?php

			validarCampos();
		?>
	</div>
</body>
</html>