<HTML>
	<HEAD>
		<TITLE>Bolsa</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<h3>Bolsa</h3>";
			
			$empresa = array (
				array("A", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("B", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("C", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("D", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("E", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("F", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("G", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("H", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("I", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("J", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("K", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("L", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("M", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("N", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("Ñ", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("O", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("P", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("Q", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("R", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("S", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("T", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("U", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("V", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("W", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("X", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("Y", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("Z", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("A", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("B", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("C", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("D", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("E", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("F", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("G", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("H", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
				array("I", random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 1000) . "€", random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 100) . "%", random_int(0, 23) . ":" . random_int(0, 59)),
			);

			echo "<table border=1 width=750px>";
				echo "<tr>";
					echo "<td>Nombre de la Empresa</td>";
					echo "<td>Precio</td>";
					echo "<td>Porcentaje</td>";
					echo "<td>V. Euros</td>";
					echo "<td>Volumen</td>";
					echo "<td>Cap</td>";
					echo "<td>Per</td>";
					echo "<td>Rent</td>";
					echo "<td>Hora</td>";
				echo "</tr>";

				foreach($empresa as $fila) {
					echo "<tr>";
					foreach($fila as $valor) {
						echo "<td>$valor</td>";
					}
					echo "</tr>";
				}
				
			echo "</table>";
			
			echo "<br><br><a href='../'>Volver</a>";
		?>
	</BODY>
</HTML>