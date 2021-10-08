<HTML>
	<HEAD>
		<TITLE>Bingo</TITLE>
	</HEAD>
	<BODY>
		<?php
			$numero = mt_rand(1,60); // Número aleatorio para los cartones
			$bola = mt_rand(1,60);   // Número aleatorio para las bolas que sacará el bombo
			$x = 1;                  // Variable para iterar Cartón
			$y = 1;                  // Variable para iterar Bombo
			
			// Array Cartón
			$carton = array();
			array_push($carton, $numero); // Insertamos la bola en el array Cartón
			// Bucle While que añada al array Cartón solo cuando los números no se repitan
			while ($x < 15) {
				$siguiente = mt_rand(1, 60);
				if(in_array($siguiente, $carton)){
					continue;
				}else{
				array_push($carton, $siguiente);
				$x++;
				}
			}
			
			// Array Bombo
			$bombo = array();
			array_push($bombo, $bola); // Insertamos la bola en el array Bombo
			// Bucle While que añada al array Bombo solo cuando los números no se repitan
			while ($y < 20) {
				$siguiente = mt_rand(1, 60);
				if(in_array($siguiente, $bombo)){
					continue;
				}else{
				array_push($bombo, $siguiente);
				$y++;
				}
			}
			
			// Mostramos el cartón
			echo "<h3>Cartón</h3>";
			echo "<table border=1>";
				echo "<tr>";
				foreach($carton as $fila) {
					echo "<td>$fila</td>";
				}
				echo "</tr>";
			echo "<table>";

			// Mostramos los números del bombo
			echo "<h3>Bombo</h3>";
			foreach($bombo as $filabombo) {
				echo "$filabombo ";
			}
			
			// Números del cartón que coinciden con los del bombo
			echo "<br><br>Coincidencias: ";
			$result = array_intersect($carton, $bombo);
			$contador=0;
			foreach($result as $aciertos) {
				$contador++;
				echo "$aciertos ";
			}
			
			// Comprobar si tenemos bingo
			if ($contador < 15) {
				echo "<br><br>No se obtuvo bingo";
			} else {
				echo "<br><br>¡Bingo!";
			}

			// Enlace para volver al inicio
			echo "<br><br><a href='../'>Volver</a>";
			
		?>
	</BODY>
</HTML>