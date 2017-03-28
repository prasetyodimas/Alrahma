<?php error_reporting(0);
include "../../config/config.php";
$act = $_GET['act'];
if ($act == 'addgallery') {
	//upload foto script
    $lokasi_file    = $_FILES['foto_gallery']['tmp_name'];
    $nama_file      = $_FILES['foto_gallery']['name'];
    $acak           = rand(000000,999999);
    $nama_file_unik = $acak.$nama_file; 
    $vdir_upload    = "../../uploads/images/gallery/";
    move_uploaded_file($_FILES["foto_gallery"]["tmp_name"], $vdir_upload.$nama_file_unik);
    $ket_galle =mysqli_real_escape_string($con,$_POST['keterangan']);
    //cek karakter yang diinput 
    $cek_panjang_karakter = strlen($ket_galle);
    if ($cek_panjang_karakter > 300) {

    	echo "<script>alert('Maaf karakter yang di iputkan melebihi batas yang ditentukan !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=gallery>";
    }else{
		$addgall ="INSERT INTO gallery (keterangan, foto_gallery) VALUES ('$ket_galle', '$nama_file_unik')";
		$sucess = mysqli_query($con,$addgall);

		if ($sucess) {
			echo "<script>alert('Data gallery berhasil ditambah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=gallery>";
		}else{
			echo "<script>alert('Data gallery gagal ditambah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=gallery>";
		}
    }
}elseif ($act =='editgallery') {
	//upload foto script
    $lokasi_file    = $_FILES['foto_gallery']['tmp_name'];
    $nama_file      = $_FILES['foto_gallery']['name'];
    $acak           = rand(000000,999999);
    $nama_file_unik = $acak.$nama_file; 
    $vdir_upload    = "../../uploads/images/gallery/";
    move_uploaded_file($_FILES["foto_gallery"]["tmp_name"], $vdir_upload.$nama_file_unik);
    $ket_galle =mysqli_real_escape_string($con,$_POST['keterangan']);
    //jika fotonya kosong !
	if (empty($nama_file)) {
		$edit   = "UPDATE gallery SET keterangan='$ket_galle' WHERE id_gallery='$_GET[id]'";
		$sucess = mysqli_query($con, $edit);
		if ($sucess) {
			echo "<script>alert('Data gallery berhasil diubah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=gallery>";
		}else{
			echo "<script>alert('Data gallery gagal diubah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=gallery>";
		}
	}else{
		//kondisi update foto baru
	    if ($nama_file_unik != $_POST['foto_lama']) {
	        unlink($vdir_upload . $_POST['foto_lama']);
	    }
		$editx   = "UPDATE gallery SET keterangan='$ket_galle', foto_gallery='$nama_file_unik' WHERE id_gallery='$_GET[id]'";
		$sucess = mysqli_query($con, $editx);

		if ($sucess) {
			echo "<script>alert('Data gallery berhasil diubah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=gallery>";
		}else{
			echo "<script>alert('Data gallery gagal diubah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=gallery>";
		}
	}
}elseif ($act== 'deletegallery') {
	//get image to delete into trash !!
 	$ambil = mysqli_fetch_array(mysqli_query($con,"SELECT foto_gallery FROM gallery WHERE id_gallery='$_GET[id]'"));
	$vdir    = "../../uploads/images/gallery/";
 	unlink($vdir . $ambil['foto_gallery']);

	$hapus = "DELETE FROM gallery WHERE id_gallery='$_GET[id]'";
	$sucess = mysqli_query($con,$hapus);

	if ($sucess) {
		echo "<script>alert('Data gallery berhasil dihapus !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=gallery>";
	}else{
		echo "<script>alert('Data gallery gagal dihapus !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=gallery>";
	}
}
?>