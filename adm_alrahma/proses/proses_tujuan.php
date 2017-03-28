<?php error_reporting(0);

include "../../config/config.php";

$act = $_GET['act'];

$get_id = $_GET['id'];
//add visimisi
if ($act == 'addtujuan') {
	
	$addpuprose ="INSERT INTO tujuan (ket_tujuan) VALUES ('$_POST[ket_tujuan]')";
	$sucess = mysqli_query($con,$addpuprose);

	if ($sucess) {
		echo "<script>alert('Tujuan & Misi berhasil ditambah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=tujuan&id='$_GET[id]'>";
	}else{
		echo "<script>alert('Tujuan & Misi gagal ditambah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=tujuan&id='$_GET[id]'>";
	}

//edit visi misi
}elseif ($act== 'edittujuan') {

	$editpurpose = "UPDATE tujuan SET ket_tujuan='$_POST[ket_tujuan]' WHERE id_tujuan='$_GET[id]'";
	$sucess = mysqli_query($con,$editpurpose);

	if ($sucess) {
		echo "<script>alert('Tujuan & Misi berhasil diedit !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=tujuan&id=$_GET[id]>";
	}else{
		echo "<script>alert('Tujuan & Misi gagal diedit !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=tujuan&id=$_GET[id]>";
	}

}

?>