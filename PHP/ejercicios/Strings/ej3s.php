<HTML>
	<HEAD>
		<TITLE>EJ3-Direccion Red –Broadcast y Rango</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<h3>EJ3-Direccion Red –Broadcast y Rango</h3>";
			
			$ip="192.168.16.100";
			$mascara="16";
			$octetos = explode(".", $ip);
			
			echo "IP: $octetos[0].$octetos[1].$octetos[2].$octetos[3]/$mascara";
			echo "<br>";
			echo "Máscara: $mascara";
			echo "<br>";
			echo "Dirección de Red: $octetos[0].$octetos[1].0.0";
			echo "<br>";
			echo "Dirección de Broadcast: $octetos[0].$octetos[1].255.255";
			echo "<br>";
			echo "Rango: $octetos[0].$octetos[1].0.1 a $octetos[0].$octetos[1].255.254";
			
			echo "<br><br><a href='.'>Volver</a>";
		?>
	</BODY>
</HTML>