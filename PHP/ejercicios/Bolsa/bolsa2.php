<HTML>
	<HEAD>
		<TITLE>Bolsa</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<h3>Bolsa</h3>";
			
			$ibex35  = array("NombreEmpresa", "Precio", "Porcentaje", "V.Euros", "Volumen", "Cap", "Per", "Rent", "Hora");
			$empresa = array("nempresa"=>"Nombre", "precio"=> random_int(0, 1000), "vporcentaje"=> random_int(0, 100) . "%", "veuros"=> random_int(0, 1000) . "€", "volumen"=> random_int(0, 1000), "cap"=> random_int(0, 1000), "per"=> random_int(0, 1000), "rent"=> random_int(0, 100) . "%", "hora"=> random_int(0, 23) . ":" . random_int(0, 59));
			
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
						echo "<td>" . $empresa['nempresa'] . "</td>";
						echo "<td>" . $empresa['precio'] . "</td>";
						echo "<td>" . $empresa['vporcentaje'] . "</td>";
						echo "<td>" . $empresa['veuros'] . "</td>";
						echo "<td>" . $empresa['volumen'] . "</td>";
						echo "<td>" . $empresa['cap'] . "</td>";
						echo "<td>" . $empresa['per'] . "</td>";
						echo "<td>" . $empresa['rent'] . "</td>";
						echo "<td>" . $empresa['hora'] . "</td>";
					echo "</tr>";
				}
			echo "</table>";
			
			echo "<br><br><a href='../'>Volver</a>";
		?>
	</BODY>
</HTML>
