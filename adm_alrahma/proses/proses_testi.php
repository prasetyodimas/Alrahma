<?php error_reporting(0);
include "../../config/config.php";
$act = $_GET['act'];
if ($act == 'addconsultasi') {
		$tgl_kosultasi = date("Y-m-d H:i:s");
		$keterangan_konsultasi =mysqli_real_escape_string($con,$_POST['keluhan_testi']);
		$addkonsul ="INSERT INTO testimoni (nama_testi,
											     email, 
									     keluhan_testi, 
									     no_telp_testi, 
									     	 tgl_testi, 
									     		status) 
				     	   VALUES ('$_POST[nama_testi]', 
				     	   	 			'$_POST[email]',
	     	   	 			   '$keterangan_konsultasi',
	     	   	 				'$_POST[no_telp_testi]', 
	     	   	 					   '$tgl_kosultasi', 
	     	   	 									'0')";
		$sucess = mysqli_query($con,$addkonsul);
		if ($sucess) {
			echo "<script>alert('Konsultasi berhasil ditambah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../../index.php?pg=consultasi>";
		}else{
			echo "<script>alert('Konsultasi gagal ditambah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../../index.php?pg=consultasi>";
		}
}elseif ($act== 'deletetesti') {
	$hapus = "DELETE FROM testimoni WHERE id_testimoni='$_GET[id]'";
	$sucess = mysqli_query($con,$hapus);
	if ($sucess) {
		echo "<script>alert('Data Konsultasi berhasil dihapus !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=mantestimoni>";
	}else{
		echo "<script>alert('Data Konsultasi gagal dihapus !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=mantestimoni>";
	}
}
?>