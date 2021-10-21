<?php

	echo "<h3>CALCULADORA</h3>";
	
	if (empty($_POST['op1' || 'op2'])) {
		// En caso de que no se introduzcan los 2 operandos
		echo "Introduce dos números para operar";
	} else {
		// Cuando se pulse el botón de Enviar
		if ($_POST['enviar']) {
			echo "Resultado de operación ";
			if ($_POST['operacion'] == '+'){
				echo $_POST['op1'] . " + " . $_POST['op2'] . " = ";
				echo $_POST['op1'] + $_POST['op2'];
			} else if ($_POST['operacion'] == '-') {
				echo $_POST['op1'] . " - " . $_POST['op2'] . " = ";
				echo $_POST['op1'] - $_POST['op2'];
			} else if ($_POST['operacion'] == '*') {
				echo $_POST['op1'] . " * " . $_POST['op2'] . " = ";
				echo $_POST['op1'] * $_POST['op2'];
			} else if ($_POST['operacion'] == '/') {
				echo $_POST['op1'] . " / " . $_POST['op2'] . " = ";
				echo $_POST['op1'] / $_POST['op2'];
			} else {
				echo "Vacio";
			}
		}
	}
	
	
		
	echo ("<br><br><a href='calculadora.html'>Seguir Calculando</a>");
	
?>