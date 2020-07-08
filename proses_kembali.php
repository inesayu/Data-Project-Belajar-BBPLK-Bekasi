<?php
	$total=$_COOKIE['total'];
	$bayar=$_POST['bayar'];

	if($bayar==$total){
        echo "<script>alert('Terimakasih')</script>";
		echo "<script>window.location.assign('form_penjualan.php')</script>";
    }elseif($bayar>$total){
        $kembali = number_format($bayar - $total,0,",",".");
		echo "<script>alert('Terimakasih, Uang kembali Anda sebesar Rp.$kembali')</script>";
		echo "<script>window.location.assign('form_penjualan.php')</script>";
    }else{
    	echo "<script>alert('Maaf uang bayar Anda kurang')</script>";
		echo "<script>window.history.back()</script>";
    }
?>