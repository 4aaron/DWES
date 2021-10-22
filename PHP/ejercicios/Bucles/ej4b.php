<HTML>
	<HEAD>
		<TITLE>EJ4B–Tabla Multiplicar</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<h3>EJ4B–Tabla de Multiplicar</h3>";
			
			$num="8";
			
			for ($x = 1; $x <= 10; $x++) {
				echo "$num x $x = ";
				$multiplicacion=$num*$x;
				echo "$multiplicacion<br>";
			}
			
			echo "<br><a href='.'>Volver</a>";
		?>
	</BODY>
</HTML>