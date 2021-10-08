<HTML>
	<HEAD>
		<TITLE>EJ2B–Conversor Decimal a base n</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<h3>EJ2B–Conversor Decimal a base n</h3>";
			
			$num=48; //Número decimal que convertiremos a diferentes bases.
			
			echo "<ul>";
				echo "<li>Decimal = ".$num;
				echo "</li>";
				
				//Base 2 - Binario
				function binario($num){
					$resultadoRestos=array();
					while ($num > 0){
						$resultado=$num/2;
						$resto=$num%2;
						$resultadoRestos[]=$resto;
						$num=intval($resultado);
					}
					krsort($resultadoRestos); 
					foreach ($resultadoRestos as $clave => $valor) { 
						echo $valor;
					} 
				}
				echo "<li>Binario = ";
				$base=binario($num);
				echo "</li>";
				
				//Base 3 - Ternario
				function ternario($num){
					$resultadoRestos=array();
					while ($num > 0){
						$resultado=$num/3;
						$resto=$num%3;
						$resultadoRestos[]=$resto;
						$num=intval($resultado);
					}
					krsort($resultadoRestos); 
					foreach ($resultadoRestos as $clave => $valor) { 
						echo $valor;
					} 
				}
				echo "<li>Ternario = ";
				$base=ternario($num);
				echo "</li>";
				
				//Base 4 - Cuaternario
				function cuaternario($num){
					$resultadoRestos=array();
					while ($num > 0){
						$resultado=$num/4;
						$resto=$num%4;
						$resultadoRestos[]=$resto;
						$num=intval($resultado);
					}
					krsort($resultadoRestos); 
					foreach ($resultadoRestos as $clave => $valor) { 
						echo $valor;
					} 
				}
				echo "<li>Cuaternario = ";
				$base=cuaternario($num);
				echo "</li>";
				
				//Base 5 - Quinario
				function quinario($num){
					$resultadoRestos=array();
					while ($num > 0){
						$resultado=$num/5;
						$resto=$num%5;
						$resultadoRestos[]=$resto;
						$num=intval($resultado);
					}
					krsort($resultadoRestos); 
					foreach ($resultadoRestos as $clave => $valor) { 
						echo $valor;
					} 
				}
				echo "<li>Quinario = ";
				$base=quinario($num);
				echo "</li>";
				
				//Base 6 - Senario
				function senario($num){
					$resultadoRestos=array();
					while ($num > 0){
						$resultado=$num/6;
						$resto=$num%6;
						$resultadoRestos[]=$resto;
						$num=intval($resultado);
					}
					krsort($resultadoRestos); 
					foreach ($resultadoRestos as $clave => $valor) { 
						echo $valor;
					} 
				}
				echo "<li>Senario = ";
				$base=senario($num);
				echo "</li>";
				
				//Base 7 - Septenario
				function septenario($num){
					$resultadoRestos=array();
					while ($num > 0){
						$resultado=$num/7;
						$resto=$num%7;
						$resultadoRestos[]=$resto;
						$num=intval($resultado);
					}
					krsort($resultadoRestos); 
					foreach ($resultadoRestos as $clave => $valor) { 
						echo $valor;
					} 
				}
				echo "<li>Septenario = ";
				$base=septenario($num);
				echo "</li>";
				
				// Base 8 - Octal
				function octal($num){
					$resultadoRestos=array();
					while ($num > 0){
						$resultado=$num/8;
						$resto=$num%8;
						$resultadoRestos[]=$resto;
						$num=intval($resultado);
					}
					krsort($resultadoRestos); 
					foreach ($resultadoRestos as $clave => $valor) { 
						echo $valor;
					} 
				}
				echo "<li>Octal = ";
				$base=octal($num);
				echo "</li>";
				
				//Base 9 - Nonario
				function nonario($num){
					$resultadoRestos=array();
					while ($num > 0){
						$resultado=$num/9;
						$resto=$num%9;
						$resultadoRestos[]=$resto;
						$num=intval($resultado);
					}
					krsort($resultadoRestos); 
					foreach ($resultadoRestos as $clave => $valor) { 
						echo $valor;
					} 
				}
				echo "<li>Nonario = ";
				$base=nonario($num);
				echo "</li>";
			echo "</ul>";
			
			echo "<a href='../'>Volver</a>";
		?>
	</BODY>
</HTML>