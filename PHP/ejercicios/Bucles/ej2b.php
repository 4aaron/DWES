<HTML>
	<HEAD>
		<TITLE>EJ2B – Conversor Decimal a base n</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<h3>EJ2B – Conversor Decimal a base n</h3>";
			
			$num = 48; // Número Decimal
			$base = 8; // Base a la que convertir $num
			
			echo "Número " . $num . " en base " . $base . " = ";
			echo base_convert ($num, 10, $base);
			
			echo "<br><br><a href='.'>Volver</a>";


		?>
	</BODY>
</HTML>