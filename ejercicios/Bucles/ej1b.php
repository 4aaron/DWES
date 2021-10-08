<HTML>
	<HEAD>
		<TITLE>EJ1B–Conversor decimal a binario</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<h3>EJ1B–Conversor decimal a binario</h3>";
			
			$num="168";
			echo "El número $num en binario es  ";
			echo str_pad((base_convert($num, 10, 2)), 8, "0", STR_PAD_LEFT);
			
			echo "<br><br><a href='../'>Volver</a>";
		?>
	</BODY>
</HTML>