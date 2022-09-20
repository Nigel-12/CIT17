<?php   
echo"<table>";
	for ($i=1; $i < 8; $i++) { 
		echo "<tr>";

		for ($j=1; $j < 8 ; $j++) { 
			echo "<td>".$i * $j."</td>";
		}

		echo "</tr>";
	}
echo "</table>";
?>