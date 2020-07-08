<?php
	function perkenalan(){
		echo "Hallo perkenalkan nama saya Ines <br>";
		echo "Senang berkenalan dengan Anda <br>";
		echo "Sampai berjumpa lagi <br>";
		echo "<hr>";
	}

	//function dengan parameter
	function perkenalanKedua($nama,$salam){
		echo "$salam, perkenalkan nama saya $nama <br>";
		echo "Senang berkenalan dengan Anda <br>";
		echo "Sampai berjumpa lagi <br>";
		echo "<hr>";
	}

	perkenalan();
	perkenalanKedua("Ines", "Selamat Pagi");
	perkenalanKedua("Ayu", "Assalamu'alaikum");
	perkenalanKedua("Mega", "Salam Sukses");
?>