<?php

	echo "<h3>CALCULADORA</h3>";
	
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
		}
	}
	
	
		
	echo ("<br><br><a href='calculadora.html'>Seguir Calculando</a>");
	
?>