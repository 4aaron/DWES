<HTML>
	<HEAD>
		<TITLE>Bingo</TITLE>
	</HEAD>
	<BODY>
		<?php
			// JUGADORES
			$jugador1gana=false;
			$jugador2gana=false;
			$jugador3gana=false;
			$jugador4gana=false;
			
			
			// CARTONES
			echo "<h3>Cartones Jugador 1</h3>";
			$a = 1;
			$b = 1;
			$c = 1;
			
			$array1 = array();
			array_push($array1);
			while ($a <= 15) {
				$siguiente = mt_rand(1, 60);
				if(in_array($siguiente, $array1)){
					continue;
				}else{
					array_push($array1, $siguiente);
					$a++;
				}
			}
			
			echo "<table border=1>";
				echo "<tr>";
				foreach($array1 as $fila) {
					echo "<td>$fila</td>";
				}
				echo "</tr>";
			echo "<table>";
			
				
			$array2 = array();
			array_push($array2);
			while ($b <= 15) {
				$siguiente = mt_rand(1, 60);
				if(in_array($siguiente, $array2)){
					continue;
				}else{
					array_push($array2, $siguiente);
					$b++;
				}
			}
			
			echo "<table border=1>";
				echo "<tr>";
				foreach($array2 as $fila) {
					echo "<td>$fila</td>";
				}
				echo "</tr>";
			echo "<table>";

				
			$array3 = array();
			array_push($array3);
			while ($c <= 15) {
				$siguiente = mt_rand(1, 60);
				if(in_array($siguiente, $array3)){
					continue;
				}else{
					array_push($array3, $siguiente);
					$c++;
				}
			}
			
			echo "<table border=1>";
				echo "<tr>";
				foreach($array3 as $fila) {
					echo "<td>$fila</td>";
				}
				echo "</tr>";
			echo "<table>";
			
			
			
			echo "<h3>Cartones Jugador 2</h3>";
			$d = 1;
			$e = 1;
			$f = 1;
			
			$array4 = array();
			array_push($array4);
			while ($d <= 15) {
				$siguiente = mt_rand(1, 60);
				if(in_array($siguiente, $array4)){
					continue;
				}else{
					array_push($array4, $siguiente);
					$d++;
				}
			}
			
			echo "<table border=1>";
				echo "<tr>";
				foreach($array4 as $fila) {
					echo "<td>$fila</td>";
				}
				echo "</tr>";
			echo "<table>";
			
				
			$array5 = array();
			array_push($array5);
			while ($e <= 15) {
				$siguiente = mt_rand(1, 60);
				if(in_array($siguiente, $array5)){
					continue;
				}else{
					array_push($array5, $siguiente);
					$e++;
				}
			}
			
			echo "<table border=1>";
				echo "<tr>";
				foreach($array5 as $fila) {
					echo "<td>$fila</td>";
				}
				echo "</tr>";
			echo "<table>";
			
				
			$array6 = array();
			array_push($array6);
			while ($f <= 15) {
				$siguiente = mt_rand(1, 60);
				if(in_array($siguiente, $array6)){
					continue;
				}else{
					array_push($array6, $siguiente);
					$f++;
				}
			}
			
			echo "<table border=1>";
				echo "<tr>";
				foreach($array6 as $fila) {
					echo "<td>$fila</td>";
				}
				echo "</tr>";
			echo "<table>";			
			
			
			
			echo "<h3>Cartones Jugador 3</h3>";
			$g = 1;
			$h = 1;
			$i = 1;
			
			$array7 = array();
			array_push($array7);
			while ($g <= 15) {
				$siguiente = mt_rand(1, 60);
				if(in_array($siguiente, $array7)){
					continue;
				}else{
					array_push($array7, $siguiente);
					$g++;
				}
			}
			
			echo "<table border=1>";
				echo "<tr>";
				foreach($array7 as $fila) {
					echo "<td>$fila</td>";
				}
				echo "</tr>";
			echo "<table>";
			
				
			$array8 = array();
			array_push($array8);
			while ($h <= 15) {
				$siguiente = mt_rand(1, 60);
				if(in_array($siguiente, $array8)){
					continue;
				}else{
					array_push($array8, $siguiente);
					$h++;
				}
			}
			
			echo "<table border=1>";
				echo "<tr>";
				foreach($array8 as $fila) {
					echo "<td>$fila</td>";
				}
				echo "</tr>";
			echo "<table>";
			
				
			$array9 = array();
			array_push($array9);
			while ($i <= 15) {
				$siguiente = mt_rand(1, 60);
				if(in_array($siguiente, $array9)){
					continue;
				}else{
					array_push($array9, $siguiente);
					$i++;
				}
			}
			
			echo "<table border=1>";
				echo "<tr>";
				foreach($array9 as $fila) {
					echo "<td>$fila</td>";
				}
				echo "</tr>";
			echo "<table>";
			
			
			
			echo "<h3>Cartones Jugador 4</h3>";
			$j = 1;
			$k = 1;
			$l = 1;
			
			$array10 = array();
			array_push($array10);
			while ($j <= 15) {
				$siguiente = mt_rand(1, 60);
				if(in_array($siguiente, $array10)){
					continue;
				}else{
					array_push($array10, $siguiente);
					$j++;
				}
			}
			
			echo "<table border=1>";
				echo "<tr>";
				foreach($array10 as $fila) {
					echo "<td>$fila</td>";
				}
				echo "</tr>";
			echo "<table>";
			
				
			$array11 = array();
			array_push($array11);
			while ($k <= 15) {
				$siguiente = mt_rand(1, 60);
				if(in_array($siguiente, $array11)){
					continue;
				}else{
					array_push($array11, $siguiente);
					$k++;
				}
			}
			
			echo "<table border=1>";
				echo "<tr>";
				foreach($array11 as $fila) {
					echo "<td>$fila</td>";
				}
				echo "</tr>";
			echo "<table>";
			
				
			$array12 = array();
			array_push($array12);
			while ($l <= 15) {
				$siguiente = mt_rand(1, 60);
				if(in_array($siguiente, $array12)){
					continue;
				}else{
					array_push($array12, $siguiente);
					$l++;
				}
			}
			
			echo "<table border=1>";
				echo "<tr>";
				foreach($array12 as $fila) {
					echo "<td>$fila</td>";
				}
				echo "</tr>";
			echo "<table>";
			
			
			// BOMBO
			$bombo = array();
			$y=1;
			array_push($bombo);
			while ($y <= 55) {
				$siguiente = mt_rand(1, 60);
				if(in_array($siguiente, $bombo)){
					continue;
				}else{
				array_push($bombo, $siguiente);
				$y++;
				}
			}
			
			echo "<h3>Bombo</h3>";
			foreach($bombo as $filabombo) {
				echo "$filabombo ";
			}
			
			
			// COINCIDENCIAS
			echo "<h3>Coincidencias:</h3>";
			
			
			echo "Cartón Nº1: ";
			$result = array_intersect($array1, $bombo);
			$contador1=0;
			foreach($result as $aciertos) {
				$contador1++;
				echo "$aciertos ";
			}
			if ($contador1 < 15) {
				echo "<br>No se obtuvo bingo<br>";
			} else {
				echo "<br>¡Bingo!<br>";
				$jugador1gana=true;
			}
			
			
			echo "<br>Cartón Nº2: ";
			$result = array_intersect($array2, $bombo);
			$contador2=0;
			foreach($result as $aciertos) {
				$contador2++;
				echo "$aciertos ";
			}
			if ($contador2 < 15) {
				echo "<br>No se obtuvo bingo<br>";
			} else {
				echo "<br>¡Bingo!<br>";
				$jugador1gana=true;
			}
			
			echo "<br>Cartón Nº3: ";
			$result = array_intersect($array3, $bombo);
			$contador3=0;
			foreach($result as $aciertos) {
				$contador3++;
				echo "$aciertos ";
			}
			if ($contador3 < 15) {
				echo "<br>No se obtuvo bingo<br>";
			} else {
				echo "<br>¡Bingo!<br>";
				$jugador1gana=true;
			}
			
			echo "<br>Cartón Nº4: ";
			$result = array_intersect($array4, $bombo);
			$contador4=0;
			foreach($result as $aciertos) {
				$contador4++;
				echo "$aciertos ";
			}
			if ($contador4 < 15) {
				echo "<br>No se obtuvo bingo<br>";
			} else {
				echo "<br>¡Bingo!<br>";
				$jugador2gana=true;
			}
			
			echo "<br>Cartón Nº5: ";
			$result = array_intersect($array5, $bombo);
			$contador5=0;
			foreach($result as $aciertos) {
				$contador5++;
				echo "$aciertos ";
			}
			if ($contador5 < 15) {
				echo "<br>No se obtuvo bingo<br>";
			} else {
				echo "<br>¡Bingo!<br>";
				$jugador2gana=true;
			}
			
			echo "<br>Cartón Nº6: ";
			$result = array_intersect($array6, $bombo);
			$contador6=0;
			foreach($result as $aciertos) {
				$contador6++;
				echo "$aciertos ";
			}
			if ($contador6 < 15) {
				echo "<br>No se obtuvo bingo<br>";
			} else {
				echo "<br>¡Bingo!<br>";
				$jugador2gana=true;
			}
			
			echo "<br>Cartón Nº7: ";
			$result = array_intersect($array7, $bombo);
			$contador7=0;
			foreach($result as $aciertos) {
				$contador7++;
				echo "$aciertos ";
			}
			if ($contador7 < 15) {
				echo "<br>No se obtuvo bingo<br>";
			} else {
				echo "<br>¡Bingo!<br>";
				$jugador3gana=true;
			}
			
			echo "<br>Cartón Nº8: ";
			$result = array_intersect($array8, $bombo);
			$contador8=0;
			foreach($result as $aciertos) {
				$contador8++;
				echo "$aciertos ";
			}
			if ($contador8 < 15) {
				echo "<br>No se obtuvo bingo<br>";
			} else {
				echo "<br>¡Bingo!<br>";
				$jugador3gana=true;
			}
			
			echo "<br>Cartón Nº9: ";
			$result = array_intersect($array9, $bombo);
			$contador9=0;
			foreach($result as $aciertos) {
				$contador9++;
				echo "$aciertos ";
			}
			if ($contador9 < 15) {
				echo "<br>No se obtuvo bingo<br>";
			} else {
				echo "<br>¡Bingo!<br>";
				$jugador3gana=true;
			}
			
			echo "<br>Cartón Nº10: ";
			$result = array_intersect($array10, $bombo);
			$contador10=0;
			foreach($result as $aciertos) {
				$contador10++;
				echo "$aciertos ";
			}
			if ($contador10 < 15) {
				echo "<br>No se obtuvo bingo<br>";
			} else {
				echo "<br>¡Bingo!<br>";
				$jugador4gana=true;
			}
			
			echo "<br>Cartón Nº11: ";
			$result = array_intersect($array11, $bombo);
			$contador11=0;
			foreach($result as $aciertos) {
				$contador11++;
				echo "$aciertos ";
			}
			if ($contador11 < 15) {
				echo "<br>No se obtuvo bingo<br>";
			} else {
				echo "<br>¡Bingo!<br>";
				$jugador4gana=true;
			}
			
			echo "<br>Cartón Nº12: ";
			$result = array_intersect($array12, $bombo);
			$contador12=0;
			foreach($result as $aciertos) {
				$contador12++;
				echo "$aciertos ";
			}
			if ($contador12 < 15) {
				echo "<br>No se obtuvo bingo";
			} else {
				echo "<br>¡Bingo!";
				$jugador4gana=true;
			}
			
			// GANADORES
			
			echo "<h3>Ganadores</h3>";
			if ($jugador1gana==false && $jugador2gana==false && $jugador3gana==false && $jugador4gana==false) {
				echo "Nadie hizo Bingo";
				} else {
					if ($jugador1gana==true && $jugador2gana==false && $jugador3gana==false && $jugador4gana==false) {
						echo "El jugador 1 hizo Bingo";
						} else if ($jugador1gana==false && $jugador2gana==true && $jugador3gana==false && $jugador4gana==false) {
							echo "El jugador 2 hizo Bingo";
							} else if ($jugador1gana==false && $jugador2gana==false && $jugador3gana==true && $jugador4gana==false) {
								echo "El jugador 3 hizo Bingo";
								} else if ($jugador1gana==false && $jugador2gana==false && $jugador3gana==false && $jugador4gana==true) {
									echo "El jugador 4 hizo Bingo";
									// Combinaciones en el caso de que solo un jugador obtuviese bingo
									} else if ($jugador1gana==true && $jugador2gana==true && $jugador3gana==false && $jugador4gana==false) {
										echo "Los jugadores 1 y 2 hicieron Bingo";
										} else if ($jugador1gana==true && $jugador2gana==false && $jugador3gana==true && $jugador4gana==false) {
											echo "Los jugadores 1 y 3 hicieron Bingo";
											} else if ($jugador1gana==true && $jugador2gana==false && $jugador3gana==false && $jugador4gana==true) {
												echo "Los jugadores 1 y 4 hicieron Bingo";
												} else if ($jugador1gana==false && $jugador2gana==true && $jugador3gana==true && $jugador4gana==false) {
													echo "Los jugadores 2 y 3 hicieron Bingo";
													} else if ($jugador1gana==false && $jugador2gana==true && $jugador3gana==false && $jugador4gana==true) {
														echo "Los jugadores 2 y 4 hicieron Bingo";
														} else if ($jugador1gana==false && $jugador2gana==false && $jugador3gana==true && $jugador4gana==true) {
															echo "Los jugadores 3 y 4 hicieron Bingo";
															// Combinaciones en el caso de que dos jugadores obtuviesen bingo
															} else if ($jugador1gana==true && $jugador2gana==true && $jugador3gana==true && $jugador4gana==false) {
																echo "Los jugadores 1, 2 y 3 hicieron Bingo";
																} else if ($jugador1gana==true && $jugador2gana==true && $jugador3gana==false && $jugador4gana==true) {
																	echo "Los jugadores 1, 2 y 4 hicieron Bingo";
																	} else if ($jugador1gana==true && $jugador2gana==false && $jugador3gana==true && $jugador4gana==true) {
																		echo "Los jugadores 1, 3 y 4 hicieron Bingo";
																		} else if ($jugador1gana==false && $jugador2gana==true && $jugador3gana==true && $jugador4gana==true) {
																			echo "Los jugadores 2, 3 y 4 hicieron Bingo";
																			// Combinaciones en el caso de que tres jugadores obtuviesen bingo
																			} else if ($jugador1gana==true && $jugador2gana==true && $jugador3gana==true && $jugador4gana==true) {
																				echo "Los jugadores 1, 2, 3 y 4 hicieron Bingo";
																				// Combinaciones en el caso de que todos los jugadores obtuviesen bingo
																				}
			}
			
			echo "<br><br><a href='.'>Volver</a>";
		?>
	</BODY>
</HTML>