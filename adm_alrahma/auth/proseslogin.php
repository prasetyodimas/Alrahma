<?php session_start();
include "../../config/config.php";
	$username =mysqli_real_escape_string($con,$_POST['username']);
	$password =mysqli_real_escape_string($con,md5($_POST['password']));
	$cek_login =mysqli_query($con,"SELECT * FROM hak_akses WHERE username='$username' AND password='$password' AND blokir !='ya'");
	$get_log   =mysqli_fetch_array($cek_login);
	//if username succesfuly allowed
	if ($get_log['username']==$username AND $get_log['password']==$password) {
	    $_SESSION['id_hak_akses'] = $get_log ['id_hak_akses'];
	    $_SESSION['username']	  = $get_log ['username'];
	    $_SESSION['password'] 	  = $get_log ['password'];
	    $_SESSION['level']    	  = $get_log ['level'];
	    echo "<script>alert('Selamat datang ".$_SESSION['username']." !!')</script>";
	    echo "<meta http-equiv=refresh content=0;url=".$base_url."adm_alrahma/homeadmin.php?pg=dashboard>";
	//if username or password not equal
	}else{
	    echo "<script>alert('maaf username dan password anda salah ulangi lagi !!')</script>";
	    echo "<script>history.go(-1)</script>";
	}
?>