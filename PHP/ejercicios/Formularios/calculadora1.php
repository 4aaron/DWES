<?php
	echo "<h3>CALCULADORA</h3>";
	
	if (empty($_POST['op1'])) {
		echo "No ha introducido un valor para el operando 1";
		} else if (empty($_POST['op2'])) {
			echo "No ha introducido un valor para el operando 2";
			} else if (isset($_POST['enviar'])) {
				if (isset($_POST['operacion']) && $_POST['operacion'] == '+') {
					
					echo "Operando 1: " . "<span style='border: 1.5px solid; width: 100px; display:block;'>" . $_POST['op1'] . "</span><br><br>";
					
					echo "Operando 2: " . "<span style='border: 1.5px solid; width: 100px; display:block;'>" . $_POST['op2'] . "</span><br><br>";
					
					$resultado = $_POST['op1'] + $_POST['op2'];
					echo "Resultado de operación: " . $_POST['op1'] . " " . $_POST['operacion'] . " " . $_POST['op2'] . " = " . $resultado;
					} else if (isset($_POST['operacion']) && $_POST['operacion'] == '-') {
						echo "Operando 1: " . "<span style='border: 1.5px solid; width: 100px; display:block;'>" . $_POST['op1'] . "</span><br><br>";
						echo "Operando 2: " . "<span style='border: 1.5px solid; width: 100px; display:block;'>" . $_POST['op2'] . "</span><br><br>";
						$resultado = $_POST['op1'] - $_POST['op2'];
						echo "Resultado de operación: " . $_POST['op1'] . " " . $_POST['operacion'] . " " . $_POST['op2'] . " = " . $resultado;
						} else if (isset($_POST['operacion']) && $_POST['operacion'] == '*') {
							echo "Operando 1: " . "<span style='border: 1.5px solid; width: 100px; display:block;'>" . $_POST['op1'] . "</span><br><br>";
							echo "Operando 2: " . "<span style='border: 1.5px solid; width: 100px; display:block;'>" . $_POST['op2'] . "</span><br><br>";
							$resultado = $_POST['op1'] * $_POST['op2'];
							echo "Resultado de operación: " . $_POST['op1'] . " " . $_POST['operacion'] . " " . $_POST['op2'] . " = " . $resultado;
							} else if (isset($_POST['operacion']) && $_POST['operacion'] == '/') {
								echo "Operando 1: " . "<span style='border: 1.5px solid; width: 100px; display:block;'>" . $_POST['op1'] . "</span><br><br>";
								echo "Operando 2: " . "<span style='border: 1.5px solid; width: 100px; display:block;'>" . $_POST['op2'] . "</span><br><br>";
								$resultado = $_POST['op1'] / $_POST['op2'];
								echo "Resultado de operación: " . $_POST['op1'] . " " . $_POST['operacion'] . " " . $_POST['op2'] . " = " . $resultado;
								} else {
									echo "No ha seleccionado una operación";
									}				
	}
	
	echo ("<br><br><a href='calculadora1.html'>Seguir Calculando</a>");
	
?>