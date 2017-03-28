<?php error_reporting(0);
include "../../config/config.php";
$act = $_GET['act'];
if ($act == 'addslider') {
	//variable foto
    $nama_file          = $_FILES['foto_slider']['name'];
    $acak               = rand(000000,999999);
    $nama_file_unik     = $acak.$nama_file; 
    $direktori_uploades = '../../uploads/images/slide/';
    $ukuran_file        = $_FILES['foto_slider']['size'];
    $fileError          = $_FILES['foto_slider']['error']; 
	$move = move_uploaded_file($_FILES['foto_slider']['tmp_name'], $direktori_uploades.$nama_file_unik); 
	if($move){  
		$addnews ="INSERT INTO slider (foto_slider) VALUES ('$nama_file_unik')";
		$sucess = mysqli_query($con,$addnews);
		if ($sucess) {
			echo "<script>alert('Data slider berhasil ditambah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=slider>";
		}else{
			echo "<script>alert('Data slider gagal ditambah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=slider>";
		}
	}else{  
	 	echo "Gagal mengupload file: ".$fileError;  
	}
}elseif ($act =='editslider') {
	//variable foto
    $nama_file          = $_FILES['foto_slider']['name'];
    $acak               = rand(000000,999999);
    $nama_file_unik     = $acak.$nama_file; 
    $direktori_uploades = '../../uploads/images/slide/';
    $ukuran_file        = $_FILES['foto_slider']['size'];
    $fileError          = $_FILES['foto_slider']['error']; 
	$move = move_uploaded_file($_FILES['foto_slider']['tmp_name'], $direktori_uploades.$nama_file_unik); 

	$edit   = "UPDATE slider SET foto_slider='$nama_file_unik' WHERE id_slider='$_GET[id]'";
	$sucess = mysqli_query($con, $edit);

	if ($sucess) {
		echo "<script>alert('Data slider berhasil diubah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=slider>";
	}else{
		echo "<script>alert('Data slider gagal diubah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=slider>";
	}
}elseif ($act== 'hapusslider') {
	//get image to delete into trash !!
 	$ambil = mysqli_fetch_array(mysqli_query($con,"SELECT foto_slider FROM slider WHERE id_slider='$_GET[id]'"));
	$vdir    = "../../uploads/images/slide/";
 	unlink($vdir . $ambil['foto_slider']);
	$hapus = "DELETE FROM slider WHERE id_slider='$_GET[id]'";
	$sucess = mysqli_query($con,$hapus);
	if ($sucess) {
		echo "<script>alert('Data slider berhasil dihapus !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=slider>";
	}else{
		echo "<script>alert('Data slider gagal dihapus !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=slider>";
	}
}

?>