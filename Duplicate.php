<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Duplicate</title>
</head>
<body>
	<?php
		$text = file("nums.txt");
		foreach ($text as $key => $value) {
			echo "element[" . $key . "]: ". $value . "<br>";
		}

		$n = 0;
		
		for ($i=0; $i < count($text) ; $i++) { 
			if($text[$i] > 1){
				$n++;
			}
		}
		echo "<br>Total number of duplicate elements found in the array is :".$n;
	?>
</body>
</html>