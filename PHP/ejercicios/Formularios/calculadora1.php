
<?php

	echo "<h3>CALCULADORA</h3>";
	
	if (empty($_POST['op1'])) {
		echo "No ha introducido un valor para el operando 1";
		} else if (empty($_POST['op2'])) {
			echo "No ha introducido un valor para el operando 2";
			} else if (isset($_POST['enviar'])) {
				if (isset($_POST['operacion']) && $_POST['operacion'] == '+') {
					echo "Resultado de operación ";
					echo $_POST['op1'] . " + " . $_POST['op2'] . " = ";
					echo $_POST['op1'] + $_POST['op2'];
					} else if (isset($_POST['operacion']) && $_POST['operacion'] == '-') {
						echo "Resultado de operación ";
						echo $_POST['op1'] . " - " . $_POST['op2'] . " = ";
						echo $_POST['op1'] - $_POST['op2'];
						} else if (isset($_POST['operacion']) && $_POST['operacion'] == '*') {
							echo "Resultado de operación ";
							echo $_POST['op1'] . " * " . $_POST['op2'] . " = ";
							echo $_POST['op1'] * $_POST['op2'];
							} else if (isset($_POST['operacion']) && $_POST['operacion'] == '/') {
								echo "Resultado de operación ";
								echo $_POST['op1'] . " / " . $_POST['op2'] . " = ";
								echo $_POST['op1'] / $_POST['op2'];
								} else {
									echo "No ha seleccionado una operación";
								}				
	}

	echo ("<br><br><a href='calculadora.html'>Seguir Calculando</a>");
	
?>
