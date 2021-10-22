<?php

	echo "<h3>CALCULADORA</h3>";
	
	echo "Operando 1: ";
	echo $_POST['op1'];
	echo "<br>";
	
	echo "Operando 2: ";
	echo $_POST['op2'];
	echo "<br>";
	
	if (empty($_POST['op1'])) {
		echo "<br>No ha introducido un valor para el operando 1";
	} else {
		if (empty($_POST['op2'])) {
			echo "<br>No ha introducido un valor para el operando 2";
			} else {
				if (isset($_POST['enviar'])) {
					echo "<br>Resultado de operación ";
					if ($_POST['operacion'] == '+') {
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
						echo "<br>No ha seleccionado una operación";
					}
				}
		}
	
	
	/*
	if ($_POST['enviar']) {
		echo "Resultado de operación ";
		if ($_POST['operacion'] == '+') {
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
	*/
	echo ("<br><br><a href='calculadora1.html'>Seguir Calculando</a>");
	
?>