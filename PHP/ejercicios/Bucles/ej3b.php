<HTML>
	<HEAD>
		<TITLE>EJ3B–Conversor Decimal a base 16</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<h3>EJ3B–Conversor Decimal a base 16</h3>";
			
			$num="15";	// Número que convertiremos
			$dec="10";	// Variable para indicar la Base Decimal
			$hex="16";	// Variable para indicar la Base Hexadecimal
			
			echo "Decimal = $num<br>";
			echo "Hexadecimal = ";
			echo strtoupper(base_convert($num, $dec, $hex));
			
			echo "<br><br><a href='.'>Volver</a>";
		?>
	</BODY>
</HTML>