<?php error_reporting(0);
include "../../config/config.php";
$act = $_GET['act'];
if ($act == 'addnews') {
	//definisi tanggal  
	$datenow=date("Y-m-d H:i:s");
	//upload foto script
    $lokasi_file    = $_FILES['foto_berita']['tmp_name'];
    $nama_file      = $_FILES['foto_berita']['name'];
    $acak           = rand(000000,999999);
    $nama_file_unik = $acak.$nama_file; 
    $vdir_upload    = "../../uploads/images/berita/";
    move_uploaded_file($_FILES["foto_berita"]["tmp_name"], $vdir_upload.$nama_file_unik);
    $keterangan_berita =mysqli_real_escape_string($con,$_POST['ket_berita']);
	$addnews ="INSERT INTO berita (judul_berita, ket_berita, foto_berita, tanggal_berita, status_news) 
			   VALUES ('$_POST[judul_berita]', '$keterangan_berita', '$nama_file_unik', '$datenow' ,'$_POST[status_news]')";
	$sucess = mysqli_query($con,$addnews);
	if ($sucess) {
		echo "<script>alert('Data news berhasil ditambah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=news>";
	}else{
		echo "<script>alert('Data news gagal ditambah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=news>";
	}
}elseif ($act =='editnews') {
	//upload foto script
    $lokasi_file    = $_FILES['foto_berita']['tmp_name'];
    $nama_file      = $_FILES['foto_berita']['name'];
    $acak           = rand(000000,999999);
    $nama_file_unik = $acak.$nama_file; 
    $vdir_upload    = "../../uploads/images/berita/";
    move_uploaded_file($_FILES["foto_berita"]["tmp_name"], $vdir_upload.$nama_file_unik);
	//jika fotonya kosong !
	if (empty($nama_file)) {
		$edit = "UPDATE berita SET judul_berita    ='$_POST[judul_berita]', 
								   ket_berita      ='$_POST[ket_berita]',
								   status_news     ='$_POST[status_news]'
								   WHERE id_berita ='$_GET[id]'";
		$sucess = mysqli_query($con, $edit);
		if ($sucess) {
			echo "<script>alert('Data news berhasil diubah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=news>";
		}else{
			echo "<script>alert('Data news gagal diubah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=news>";
		}
	}else{
		//kondisi update foto baru
	    if ($nama_file_unik != $_POST['foto_lama']) {
	        unlink($vdir_upload . $_POST['foto_lama']);
	    }
		$edit_fotolama   = "UPDATE berita SET 
								   judul_berita    ='$_POST[judul_berita]', 
								   ket_berita      ='$_POST[ket_berita]',
								   foto_berita     ='$nama_file_unik' 
								   WHERE id_berita ='$_GET[id]'";
								   
		$sucess = mysqli_query($con, $edit_fotolama);

		if ($sucess) {
			echo "<script>alert('Data news berhasil diubah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=news>";
		}else{
			echo "<script>alert('Data news gagal diubah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=news>";
		}
	}
}elseif ($act== 'deletenews') {
	//get image to delete into trash !!
 	$ambil = mysqli_fetch_array(mysqli_query($con,"SELECT foto_berita FROM berita WHERE id_berita='$_GET[id]'"));
	$vdir    = "../../uploads/images/berita/";
 	unlink($vdir . $ambil['foto_berita']);

	$hapus = "DELETE FROM berita WHERE id_berita='$_GET[id]'";
	$sucess = mysqli_query($con,$hapus);

	if ($sucess) {
		echo "<script>alert('Data news berhasil dihapus !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=news>";
	}else{
		echo "<script>alert('Data news gagal dihapus !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=news>";
	}
}
?>