<HTML>
	<HEAD>
		<TITLE>Bolsa</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<h3>Bolsa</h3>";
			
			$ibex35 = array ("nombre", "precio", "vporcentaje", "veuros", "volumen", "cap", "per", "rent", "hora");
			
			echo "<table border=1 width=750px>";
				echo "<tr>";
					echo "<td>" . $ibex35[0] . "</td>";
					echo "<td>" . $ibex35[1] . "</td>";
					echo "<td>" . $ibex35[2] . "</td>";
					echo "<td>" . $ibex35[3] . "</td>";
					echo "<td>" . $ibex35[4] . "</td>";
					echo "<td>" . $ibex35[5] . "</td>";
					echo "<td>" . $ibex35[6] . "</td>";
					echo "<td>" . $ibex35[7] . "</td>";
					echo "<td>" . $ibex35[8] . "</td>";
				echo "</tr>";
				
				for ($i=0; $i<=35; $i++) {
					echo "<tr>";
						echo "<td>" . $ibex35[0] . + $i ."</td>";
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
			
			echo "<br><br><a href='.'>Volver</a>";
		?>
	</BODY>
</HTML>
