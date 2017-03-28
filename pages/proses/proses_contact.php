<?php error_reporting(0);

include "../../config/config.php";


$act = $_GET['act'];

if ($act == 'addcontact') {
	
	$tgl_kosultasi = date("Y-m-d H:i:s");
	
	$addcontact ="INSERT INTO contactus (nama, email, phone, keterangan) VALUES ('$_POST[nama]','$_POST[email]', '$_POST[phone]','$_POST[keterangan]')";
	$sucess = mysqli_query($con,$addcontact);

	if ($sucess) {
		echo "<script>alert('Contactus berhasil ditambah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../../contact.html>";
	}else{
		echo "<script>alert('Contactus gagal ditambah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../../contact.html>";
	}

}

?>