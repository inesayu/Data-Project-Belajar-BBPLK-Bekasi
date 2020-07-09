<?php
	function perkenalan(){
		echo "Hallo perkenalkan nama saya Ines <br>";
		echo "Senang berkenalan dengan Anda <br>";
		echo "Sampai berjumpa lagi <br>";
		echo "<hr>";
	}

	//function dengan parameter
	function perkenalanKedua($nama="Mega",$salam="Assalamu'alaikum"){
		echo "$salam, perkenalkan nama saya $nama <br>";
		echo "Senang berkenalan dengan Anda <br>";
		echo "Sampai berjumpa lagi <br>";
		echo "<hr>";
	}

	perkenalan();
	perkenalanKedua("Ines", "Selamat Pagi");
	perkenalanKedua("Ayu");
	perkenalanKedua();

	//Function yang mengembalikan nilai
	function hitungUmur($tahunLahir, $tahunSekarang){
		$umur = $tahunSekarang - $tahunLahir;
		return $umur;
	}

	$tahunSekarang = date('Y');
	echo "Umur Saya adalah ".hitungUmur(2000, $tahunSekarang)."<br>";

	function hitungLuasSegitiga($alas, $tinggi){
		$luas = $alas * $tinggi / 2;
		return $luas;
	}
	function hitungKelilingSegitiga($a, $b, $c){
		$kel = $a + $b + $c;
		return $kel;
	}

	echo "Luas Segitiga dengan alas sebesar 3cm dan tinggi 4cm adalah : ".hitungLuasSegitiga(3, 4)."<br>";
	echo "Keliling Segitiga dengan sisi A=5, B=10, C=11 adalah : ".hitungLuasSegitiga(5, 10, 11)."<br>";
?>