<HTML>
	<HEAD>
		<TITLE>EJ2A–Array que calcule la media de los valores pares e impares</TITLE>
	</HEAD>
	<BODY>
		<?php
			//echo "<h3>EJ2A–Array que calcule la media de los valores pares e impares</h3>";
			
			$numeros = array (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
			$impares = array (1,3,5,7,9,11,13,15,17,19,21,23,25,27,29,31,33,35,37,39);
			$suma = array (2,5,8,11,14,17,20,23,26,29,32,35,38,41,44,47,50,53,56,59);
			
			echo "<table border=1>";
				echo "<tr>";
					echo "<td>Indice</td>";
					echo "<td>Valor</td>";
					echo "<td>Suma</td>";
				echo "</tr>";
				/*
				for ($i=0; $i<=20; $i++) {
					echo "<tr><td>$i</td>";
					echo "<td>$impares[8]</td>";
					echo "<td>$i+$impares</td></tr>";
				}
				*/
				echo "<tr>";
					echo "<td>$numeros[0]</td>";
					echo "<td>$impares[0]</td>";
					echo "<td>$suma[0]</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>$numeros[1]</td>";
					echo "<td>$impares[1]</td>";
					echo "<td>$suma[1]</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>$numeros[2]</td>";
					echo "<td>$impares[2]</td>";
					echo "<td>$suma[2]</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>$numeros[3]</td>";
					echo "<td>$impares[3]</td>";
					echo "<td>$suma[3]</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>$numeros[4]</td>";
					echo "<td>$impares[4]</td>";
					echo "<td>$suma[4]</td>";
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>$numeros[5]</td>";
					echo "<td>$impares[5]</td>";
					echo "<td>$suma[5]</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>$numeros[6]</td>";
					echo "<td>$impares[6]</td>";
					echo "<td>$suma[6]</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>$numeros[7]</td>";
					echo "<td>$impares[7]</td>";
					echo "<td>$suma[7]</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>$numeros[8]</td>";
					echo "<td>$impares[8]</td>";
					echo "<td>$suma[8]</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>$numeros[9]</td>";
					echo "<td>$impares[9]</td>";
					echo "<td>$suma[9]</td>";
				echo "</tr>";

				echo "<tr>";
					echo "<td>$numeros[10]</td>";
					echo "<td>$impares[10]</td>";
					echo "<td>$suma[10]</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>$numeros[11]</td>";
					echo "<td>$impares[11]</td>";
					echo "<td>$suma[11]</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>$numeros[12]</td>";
					echo "<td>$impares[12]</td>";
					echo "<td>$suma[12]</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>$numeros[13]</td>";
					echo "<td>$impares[13]</td>";
					echo "<td>$suma[13]</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>$numeros[14]</td>";
					echo "<td>$impares[14]</td>";
					echo "<td>$suma[14]</td>";
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>$numeros[15]</td>";
					echo "<td>$impares[15]</td>";
					echo "<td>$suma[15]</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>$numeros[16]</td>";
					echo "<td>$impares[16]</td>";
					echo "<td>$suma[16]</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>$numeros[17]</td>";
					echo "<td>$impares[17]</td>";
					echo "<td>$suma[17]</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>$numeros[18]</td>";
					echo "<td>$impares[18]</td>";
					echo "<td>$suma[18]</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>$numeros[19]</td>";
					echo "<td>$impares[19]</td>";
					echo "<td>$suma[19]</td>";
				echo "</tr>";
				
			echo "</table>";
			
			echo "<br><a href='../'>Volver</a>";
		?>
	</BODY>
</HTML>