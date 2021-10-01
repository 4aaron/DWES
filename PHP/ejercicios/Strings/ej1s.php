<HTML>
	<HEAD>
		<TITLE>EJ1-Conversion IP Decimal a Binario</TITLE>
	</HEAD>
	<BODY>
		<?php
			printf ("<h3>EJ1-Conversion IP Decimal a Binario</h3>");
			
			$ip=("192.168.206.209");
			$ip2=("10.33.161.2");
			
			printf ("IP: $ip<br>Binario: ");
			printf (base_convert($ip, 10, 2));
						
			printf ("<br><br>IP: $ip2<br>Binario: ");
			printf (base_convert($ip, 10, 2));
			
			sprintf ("<br>IP: $ip<br>Binario: ");
			sprintf (base_convert($ip2, 10, 2));
			
			sprintf ("IP: $ip2<br>Binario: ");
			sprintf (base_convert($ip2, 10, 2));
			
			printf ("<br><br><a href='../'>Volver</a>");
		?>
	</BODY>
</HTML>