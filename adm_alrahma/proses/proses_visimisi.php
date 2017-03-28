<?php error_reporting(0);

include "../../config/config.php";

$act = $_GET['act'];

$get_id = $_GET['id'];
//add visimisi
if ($act == 'addvisimisi') {
	
	$addvision ="INSERT INTO visimisi (ket_visimisi) VALUES ('$_POST[ket_visimisi]')";
	$sucess = mysqli_query($con,$addvision);

	if ($sucess) {
		echo "<script>alert('Visi & Misi berhasil ditambah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=visimisi&id='$_GET[id]'>";
	}else{
		echo "<script>alert('Visi & Misi gagal ditambah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=visimisi&id='$_GET[id]'>";
	}

//edit visi misi
}elseif ($act== 'editvisimisi') {

	$editvision = "UPDATE visimisi SET ket_visimisi='$_POST[ket_visimisi]' WHERE id_visimisi='$_GET[id]'";
	$sucess = mysqli_query($con,$editvision);

	if ($sucess) {
		echo "<script>alert('Visi & Misi berhasil diedit !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=visimisi&id=$_GET[id]>";
	}else{
		echo "<script>alert('Visi & Misi gagal diedit !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=visimisi&id=$_GET[id]>";
	}

}

?>