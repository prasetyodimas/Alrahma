<?php error_reporting(0);
include "../../config/config.php";
$act = $_GET['act'];
if ($act == 'addevent') {
	$tgl_event  = date("Y-m-d");
	//upload foto script
    $lokasi_file    = $_FILES['foto_event']['tmp_name'];
    $nama_file      = $_FILES['foto_event']['name'];
    $acak           = rand(000000,999999);
    $nama_file_unik = $acak.$nama_file; 
    $vdir_upload    = "../../uploads/images/event/";
    $keterangan =mysqli_real_escape_string($con,$_POST['keterangan_event']);
    move_uploaded_file($_FILES["foto_event"]["tmp_name"], $vdir_upload.$nama_file_unik);

	$addingevent ="INSERT INTO event (judul_event, keterangan_event, foto_event, tanggal_event) 
			        VALUES ('$_POST[judul_event]', '$keterangan','$nama_file_unik', '$tgl_event')";
	$sucess = mysqli_query($con,$addingevent);
	if ($sucess) {
		echo "<script>alert('Data event berhasil ditambah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=event>";
	}else{
		echo "<script>alert('Data event gagal ditambah !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=event>";
	}
}elseif ($act =='editevent') {
	//upload foto script
    $lokasi_file    = $_FILES['foto_event']['tmp_name'];
    $nama_file      = $_FILES['foto_event']['name'];
    $acak           = rand(000000,999999);
    $nama_file_unik = $acak.$nama_file; 
    $vdir_upload    = "../../uploads/images/event/";
    $keterangan =mysqli_real_escape_string($con,$_POST['keterangan_event']);
    //jika fotonya kosong !! atau tidak mengubah file foto
	if (empty($lokasi_file)) {
		$edit   = "UPDATE event SET judul_event 	 ='$_POST[judul_event]',
		 							keterangan_event ='$keterangan',
		 							tanggal_event 	 ='$_POST[tgl_event]' WHERE id_event='$_GET[id]'";
		$sucess = mysqli_query($con, $edit);

		if ($sucess) {
			echo "<script>alert('Data event berhasil diubah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=event>";
		}else{
			echo "<script>alert('Data event gagal diubah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=event>";
		}
	}else{
		//kondisi update foto baru
    	if ($nama_file_unik != $_POST['foto_lama']) {
        unlink($vdir_upload . $_POST['foto_lama']);
    	}

		$editfotoevent   = "UPDATE event SET judul_event ='$_POST[judul_event]',
		 						   keterangan_event 	 ='$keterangan',
		 						   foto_event			 ='$nama_file_unik]',
		 						   tanggal_event 	     ='$_POST[tgl_event]' WHERE id_event='$_GET[id]'";

		 echo $editfotoevent;
		 exit();
		$sucess = mysqli_query($con, $editfotoevent);

		if ($sucess) {
			echo "<script>alert('Data event berhasil diubah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=event>";
		}else{
			echo "<script>alert('Data event gagal diubah !!');</script>";
			echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=event>";
		}

	}
}elseif ($act== 'deleteevent') {
	//get image to delete into trash !!
 	$ambil = mysqli_fetch_array(mysqli_query($con,"SELECT foto_event FROM event WHERE id_event='$_GET[id]'"));
	$vdir    = "../../uploads/images/event/";
 	unlink($vdir . $ambil['foto_event']);

	$hapus = "DELETE FROM event WHERE id_event='$_GET[id]'";
	$sucess = mysqli_query($con,$hapus);

	if ($sucess) {
		echo "<script>alert('Data event berhasil dihapus !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=event>";
	}else{
		echo "<script>alert('Data event gagal dihapus !!');</script>";
		echo "<meta http-equiv=refresh content=0;url=$url_base"."../homeadmin.php?pg=event>";
	}

}
?>