<HTML>
	<HEAD>
		<TITLE>IBEX-35</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<h3>IBEX-35</h3>";
			
			$inditex = array ("precio"=>"31790", "porcentaje"=>"-0,09%", "euros"=>"-0,03€", "titulos"=>"478834", "veuros"=>"15134149,78");
			
			echo "Precio = " . $inditex['precio'] . "<br>";
			echo "Porcentaje = " . $inditex['porcentaje'] . "<br>";
			echo "Euros = " . $inditex['euros'] . "<br>";
			echo "Titulos = " . $inditex['titulos'] . "<br>";
			echo "Total = " . $inditex['veuros'];
			
			echo "<br><br><a href='../'>Volver</a>";
		?>
	</BODY>
</HTML>