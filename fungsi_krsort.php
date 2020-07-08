<?php
	//Memasukan nilai ke dalam array
	$mobil=array("Zulka"=>"Volvo", "Ali"=>"BMW", "Ajuab"=>"Toyota");

	//Kunci atau Key pada Array diurutkan secara Descending
	krsort($mobil);

	//Dengan looping menampilkan tiap nilai dari array
	foreach($mobil as $x => $nilai_x){
		echo "Kunci=" . $x .", Nilainya=" . $nilai_x;
		echo "<br/>";
	}
?>