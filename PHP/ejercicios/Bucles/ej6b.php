<HTML>
	<HEAD>
		<TITLE>EJ6B – Factorial</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<h3>EJ6B–Factorial</h3>";
			
			$num="5";
			$factorial="1";
			
			for ($x = 1; $x <= $num; $x++) {
				$factorial=$factorial*$x;
			}
			echo "$num! = ";
			for ($y = $num; $y > 0; $y--) {
				if ($y > 1) {
					echo "$y x ";
				} else {
					echo "$y ";
				}
			}
			echo "= $factorial";
			
			echo "<br><br><a href='../'>Volver</a>";
		?>
	</BODY>
</HTML>