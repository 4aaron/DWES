<HTML>
	<HEAD>
		<TITLE>EJ1A–Array que almacene los 20 primeros números impares</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<h3>EJ1A-Array que almacene los 20 primeros números impares</h3>";
			echo "<table border=1>";
				echo "<tr><td>Indice</td>";
					for ($x = 0; $x < 20; $x++) {
								$indice = array ($x);
								echo "<tr><td>$x</td></tr>";
							}
				echo "</tr>";
				echo "<tr><td>Valor</td>";
					for ($y = 1; $y < 20; $y+=2) {
								$impares = array ($y);
								echo "</tr><td>$y</td></tr>";
							}
				echo "</tr>";
				echo "<tr><td>Suma</td>";				
				echo "</tr>";
							
			echo "</table>";
			
			echo "<br><a href='../'>Volver</a>";
		?>
	</BODY>
</HTML>