<?php
	//Memasukan nilai ke dalam array
	$mobil=array("Zulka"=>"Volvo", "Ali"=>"BMW", "Ajuab"=>"Toyota");

	//Nilai pada Array diurutkan secara Ascending
	asort($mobil);

	//Dengan looping menampilkan tiap nilai dari array
	foreach($mobil as $x => $nilai_x){
		echo "Kunci=" . $x .", Nilainya=" . $nilai_x;
		echo "<br/>";
	}
?>