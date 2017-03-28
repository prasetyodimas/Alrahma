<?php error_reporting(0);
include "../../config/config.php";
$act = $_GET['act'];
if ($act == 'aduser') {
	$md5pass = md5($_POST['password']);
	$add ="INSERT INTO hak_akses (username, password, level, blokir) VALUES ('$_POST[username]', '$md5pass', '$_POST[level]','tidak')";
	$sucess = mysqli_query($con,$add);
	if ($sucess) {
		echo "<script>alert('Data user berhasil ditambah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=user>";
	}else{
		echo "<script>alert('Data user gagal ditambah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=user>";
	}
}elseif ($act =='edituser') {
	$edit   = "UPDATE hak_akses SET username='$_POST[username]', password='$_POST[password]', level='$_POST[level]', blokir='$_POST[blokir]' 
			   WHERE id_hak_akses='$_POST[id]'";
	$sucess = mysqli_query($con, $edit);
	if ($sucess) {
		echo "<script>alert('Data user berhasil diubah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=user>";
	}else{
		echo "<script>alert('Data user gagal diubah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=user>";
	}
}elseif ($act== 'deleteuser') {
	$hapus = "DELETE FROM hak_akses WHERE id_hak_akses='$_GET[id]'";
	$sucess = mysqli_query($con,$hapus);
	if ($sucess) {
		echo "<script>alert('Data user berhasil dihapus !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=user>";
	}else{
		echo "<script>alert('Data user gagal dihapus !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=user>";
	}
}
?>