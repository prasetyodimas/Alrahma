<?php session_start();
  	// session_destroy();
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	unset($_SESSION['level']);

	echo "<script>alert('anda berhasil logout!')</script>";
	echo "<script>window.location='../index.php'</script>";

?>