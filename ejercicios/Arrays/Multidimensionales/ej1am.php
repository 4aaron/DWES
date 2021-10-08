<HTML>
	<HEAD>
		<TITLE>EJ1B–Conversor decimal a binario</TITLE>
	</HEAD>
	<BODY>
		<?php
			$num="48";
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
				echo "El número $num en binario es  ";
				$base=binario($num);
				
				//echo str_pad("input", 8, "0", STR_PAD_LEFT);
		?>
	</BODY>
</HTML>