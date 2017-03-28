<?php error_reporting(0);
include "../../config/config.php";
//setting tanggal dan format waktu indonesia
date_default_timezone_set('Asia/Jakarta');
$act = $_GET['act'];
if ($act == 'answertesti') {
	$tgl_answer   = date("Y-m-d H:i:s");
	$id_testimoni = $_GET['id'];
	$sesi_user    = $_GET['sesi']; 
	$cek_vallue_answertesti = mysqli_query($con,"SELECT * FROM analisa_testi at JOIN testimoni t ON t.id_testimoni=at.id_testimoni
											     WHERE at.answer_testi='$_POST[answer_testi]'");
	$cek_vall = mysqli_num_rows($cek_vallue_answertesti);
	if ($cek_vall > 0) {
		
			echo "<script>alert('Maaf Konsultasi sudah ditanggapi !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=answertesti&id=$id_testimoni>";
	}else{
		$answer_testi =mysqli_real_escape_string($con,$_POST['keluhan_testi']);
		$addkonsul ="INSERT INTO analisa_testi (id_testimoni, sesi_user, answer_testi, tgl_answer) 
				     VALUES ('$id_testimoni', '$sesi_user' ,'$answer_testi', '$tgl_answer')";
		$sucess = mysqli_query($con,$addkonsul);
		if ($sucess) {
			echo "<script>alert('Konsultasi berhasil di tanggapi !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=answertesti&id=$id_testimoni>";
		}else{
			echo "<script>alert('Konsultasi gagal di tanggapi !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=mantestimoni>";
		}
	}
}
?>