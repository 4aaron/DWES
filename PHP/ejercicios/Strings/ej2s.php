<HTML>
	<HEAD>
		<TITLE>EJ2-Conversion IP Decimal a Binario</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<h3>EJ2-Conversion IP Decimal a Binario</h3>";
			
			$ip=("192.168.206.209");
			$ip2=("10.33.161.2");
			
			echo  ("IP: $ip<br>Binario: ");
			echo (base_convert($ip, 10, 2));
			
			echo ("<br><br>IP: $ip2<br>Binario: ");
			echo (base_convert($ip, 10, 2));
			
			echo "<br><br><a href='.'>Volver</a>";
		?>
	</BODY>
</HTML>