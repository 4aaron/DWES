<HTML>
	<HEAD>
		<TITLE>IBEX-35</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<h3>IBEX-35</h3>";
			
			$ibex35 = array ("nombre", "precio", "vporcentaje", "veuros", "volumen", "cap", "per", "rent", "hora");
			
			echo "<table border=1 width=750px>";
				echo "<tr>";
					echo "<td>Nombre</td>";
					echo "<td>Precio</td>";
					echo "<td>VAR (%)</td>";
					echo "<td>VAR (€)</td>";
					echo "<td>Volumen (€)</td>";
					echo "<td>CAP</td>";
					echo "<td>PER</td>";
					echo "<td>Rent/Div</td>";
					echo "<td>Hora</td>";
				echo "</tr>";
				
				for ($i=0; $i<=35; $i++) {
					echo "<tr>";
						echo "<td>" . $ibex35[0] . "</td>";
						echo "<td>" . random_int(0, 1000) . "," . random_int(0, 99) . "</td>";
						echo "<td>" . random_int(0, 1000) . "," . random_int(0, 99) . "%</td>";
						echo "<td>" . random_int(0, 1000) . "," . random_int(0, 99) . "</td>";
						echo "<td>" . random_int(0, 1000) . "," . random_int(0, 99) . "</td>";
						echo "<td>" . random_int(0, 1000) . "," . random_int(0, 99) . "</td>";
						echo "<td>" . random_int(0, 1000) . "," . random_int(0, 99) . "</td>";
						echo "<td>" . random_int(0, 1000) . "," . random_int(0, 99) . "%</td>";
						echo "<td>" . random_int(0, 24) . ":" . random_int(0, 59) . "</td>";
					echo "</tr>";
				}
			echo "</table>";
			
			echo "<br><br><a href='../'>Volver</a>";
		?>
	</BODY>
</HTML>
