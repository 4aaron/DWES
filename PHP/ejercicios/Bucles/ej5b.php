<HTML>
	<HEAD>
		<TITLE>EJ5B – Tabla multiplicar con TD</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<h3>EJ5B–Tabla de multiplicar con TD</h3>";
			
			$num="8";
			
			for ($x = 1; $x <= 10; $x++) {
				echo "<table border=1>";
					echo "<td width=100px align=center>$num x $x</td>";
					$multiplicacion=$num*$x;
					echo "<td width=75px align=center>$multiplicacion</td>";
				echo "</table>";
			}
			
			echo "<br><a href='../'>Volver</a>";
		?>
	</BODY>
</HTML>