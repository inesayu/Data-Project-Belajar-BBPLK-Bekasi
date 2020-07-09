<?php
	/*function hitungLuasLingkaran($r){
		$luas = 3.14 * $r * $r;
		return $luas;
	}
	function hitungKelLingkaran($r){
		$kel = 3.14 * 2 * $r;
		return $kel;
	}*/
	function hitungLuasPersegiPanjang($panjang, $lebar){
		$luasPersegiPanjang = $panjang * $lebar;
		return $luasPersegiPanjang;
	}
	function hitungKelPersegiPanjang($panjang, $lebar){
		$kelPersegiPanjang = 2 * $panjang + $lebar;
		return $kelPersegiPanjang;
	}
	function hitungLuasPersegi($sisi){
		$luasPersegi = $sisi * $sisi;
		return $luasPersegi;
	}
	function hitungKelPersegi($sisi){
		$kelPersegi = 4 * $sisi;
		return $kelPersegi;
	}
?>