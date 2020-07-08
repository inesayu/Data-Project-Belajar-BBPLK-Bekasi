<!DOCTYPE html>
<html>
<head>
	<title>For</title>
</head>
<body>
	<?php
		$baris=$_POST['baris'];
		for ($a=1; $a<=$baris ; $a++) { 
			for ($b=1; $b<=$a ; $b++){ 
				echo "*";
			}echo "<br>";
		}
	?>
	<br>
	<a href="form_for.php">Kembali</a>
</body>
</html>