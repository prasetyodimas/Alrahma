<?php error_reporting(0);
include "../../config/config.php";
$act = $_GET['act'];
if ($act == 'addcareer') {
	//upload foto script
    $lokasi_file    = $_FILES['foto']['tmp_name'];
    $nama_file      = $_FILES['foto']['name'];
    $acak           = rand(000000,999999);
    $nama_file_unik = $acak.$nama_file; 
    $vdir_upload    = "../../uploads/images/career/";
    move_uploaded_file($_FILES["foto"]["tmp_name"], $vdir_upload.$nama_file_unik);
    $keterangan =mysqli_real_escape_string($con,$_POST['ket_career']);
    //tgl posting
    $datenow = date("Y-m-d");
	$addingcareer ="INSERT INTO career (judul_career, ket_career, foto, tgl_posting) VALUES ('$_POST[judul_career]','$keterangan','$nama_file_unik','$datenow')";
	$sucess = mysqli_query($con,$addingcareer);
	if ($sucess) {
		echo "<script>alert('Data career berhasil ditambah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=career>";
	}else{
		echo "<script>alert('Data career gagal ditambah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=career>";
	}
}elseif ($act =='editcareer') {
 	//upload foto script
    $lokasi_file    = $_FILES['foto']['tmp_name'];
    $nama_file      = $_FILES['foto']['name'];
    $acak           = rand(000000,999999);
    $nama_file_unik = $acak.$nama_file; 
    $vdir_upload    = "../../uploads/images/career/";
    move_uploaded_file($_FILES["foto"]["tmp_name"], $vdir_upload.$nama_file_unik);
    $keterangan =mysqli_real_escape_string($con,$_POST['ket_career']);
    //jika fotonya kosong !! atau tidak mengubah file foto
	if (empty($nama_file)) {
		$edit   = "UPDATE career SET judul_career='$_POST[judul_career]', ket_career ='$keterangan' WHERE id_career='$_GET[id]'";
		$sucess = mysqli_query($con, $edit);

			if ($sucess) {
				echo "<script>alert('Data career berhasil diubah !!');</script>";
				echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=career>";
			}else{
				echo "<script>alert('Data career gagal diubah !!');</script>";
				echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=career>";
			}
	//jika foto ingin diubah !!
	}else{
 	//kondisi update foto baru
    if ($nama_file_unik != $_POST['foto_lama']) {
        unlink($vdir_upload . $_POST['foto_lama']);
    }

		$edit2   = "UPDATE career SET judul_career='$_POST[judul_career]', ket_career='$keterangan', foto='$nama_file_unik'  WHERE id_career='$_GET[id]'";
		$sucess = mysqli_query($con, $edit2);

		if ($sucess) {
			echo "<script>alert('Data career berhasil diubah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=career>";
		}else{
			echo "<script>alert('Data career gagal diubah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=career>";
		}
	}
}elseif ($act== 'deletecareer') {
	//get image to delete into trash !!
 	$ambil = mysqli_fetch_array(mysqli_query($con,"SELECT foto FROM career WHERE id_career='$_GET[id]'"));
	$vdir    = "../../uploads/images/career/";
 	unlink($vdir . $ambil['foto']);

	$hapus = "DELETE FROM career WHERE id_career='$_GET[id]'";
	$sucess = mysqli_query($con,$hapus);

	if ($sucess) {
		echo "<script>alert('Data career berhasil dihapus !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=career>";
	}else{
		echo "<script>alert('Data career gagal dihapus !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=career>";
	}
}
?>