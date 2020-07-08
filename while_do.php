<!DOCTYPE html>
<html>
<head>
	<title>While - Do While</title>
</head>
<body>
	<h3>CONTOH WHILE</h3>
	<?php
		$a=1;
		while($a<12){
			if($a!=5){
				echo "$a <br>";
			}$a=$a+2;
		}
	?>

	<h3>CONTOH DO WHILE</h3>
	<?php
		$a=5;
		do{
			echo "Benar";
		} while($a<4);
	?>
</body>
</html>