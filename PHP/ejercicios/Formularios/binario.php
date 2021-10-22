<?php
	
	echo "<h3>CONVERSOR BINARIO</h3>";
	echo "Número Decimal: <span style='border: 1.5px solid; width: 100px; display:block;'>" . $_POST['decimal'] . "</span><br>";
	echo "Número Binario: <span style='border: 1.5px solid; width: 100px; display:block;'>";
	echo str_pad((base_convert($_POST['decimal'], 10, 2)), 8, "0", STR_PAD_LEFT) . "</span>";
	
	echo ("<br><a href='.'>Volver</a>");
	
?>
