<?php error_reporting(0);
include "../../config/config.php";
$act = $_GET['act'];
if ($act=='deletecontactus') {
	$x = "DELETE FROM contactus WHERE id_contactus='$_GET[id]'";
	$sucess = mysqli_query($con,$x);
	if ($sucess) {
		echo "<script>alert('Data contactus berhasil dihapus !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=contactus>";
	}else{
		echo "<script>alert('Data contactus gagal dihapus !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=contactus>";
	}
}
?>