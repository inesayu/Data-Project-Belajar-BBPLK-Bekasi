<?php
include_once 'myFunction.php';

/*if(isset($_GET['jari'])){
	$r = $_GET['jari'];
	$luas = hitungLuasLingkaran($r);
	$kel = hitungKelLingkaran($r);
}else{
	$luas = 0;
	$kel = 0;
}
?>*/

if(isset($_GET['panjang' AND 'lebar'])){
	$panjang = $_GET['panjang'];
	$lebar = $_GET['lebar'];
	$luasPersegiPanjang = hitungLuasPersegiPanjang($panjang, $lebar);
	$kelPersegiPanjang = hitungKelPersegiPanjang($panjang, $lebar);
}else{
	$luasPersegiPanjang = 0;
	$kelPersegiPanjang = 0;
}

if(isset($_GET['sisi'])){
	$sisi = $_GET['sisi'];
	$luasPersegi = hitungLuasPersegi($sisi);
	$kelPersegi = hitungKelPersegi($sisi);
}else{
	$luasPersegi = 0;
	$kelPersegi = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- 	<form action="" method="">
		Jari-jari Lingkaran :<input type="number" name="jari" required=""><br>
		<input type="submit" value="Hitung">
	</form>
	<hr>
	Luas Lingkaran : <?=$luas;?>
	Keliling Lingkaran : <?=$kel;?> -->

	<form action="" method="">
		Panjang Persegi Panjang :<br><input type="number" name="panjang" required=""><br>
		Lebar Persegi Panjang :<br><input type="number" name="lebar" required=""><br>
		<input type="submit" value="Hitung">
	</form>
	Luas Persegi Panjang : <?=$luasPersegiPanjang;?><br>
	Keliling Persegi Panjang : <?=$kelPersegiPanjang;?>
	<hr>
	<form action="" method="">
		Sisi Persegi :<br><input type="number" name="sisi" required=""><br>
		<input type="submit" value="Hitung">
	</form>
	Luas Persegi : <?=$luasPersegi;?><br>
	Keliling Persegi : <?=$kelPersegi;?>
</body>
</html>