<!DOCTYPE html>
<html>
<head>
	<title>Control Structures</title>
</head>
<body>
	<?php
	/*	$a=$_POST['angka'];
	 	if($a<4){
			echo "variable a adalah lebih kecil dari 4";
		}else{
			echo "variable a adalah tidak lebih kecil dari 4";
		}
	*/

		$a=$_POST['angka'];
	 	if($a>80){
			echo "Grade A";
	 	}elseif($a>70){
			echo "Grade B";
		}elseif($a>50){
			echo "Grade C";
		}
		else{
			echo "Grade D";
		}
	?>

	<br>
	<a href="form_latihanControl.html">Kembali</a>
</body>
</html>