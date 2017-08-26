<?php session_start();
error_reporting(0);
//cek session !!
if(empty($_SESSION['username'])){
	echo "<div style='text-align:center;'>
			<img src='../img/access-denied.png'></img>
		 	<p style='  color: #ff0000;
					    font-size: 16px;
					    text-transform: uppercase;
					    font-weight: bold;
					    font-family: arial,sans-serif;'>
					    Maaf anda harus login terlebih dahulu !!</p>
		 </div>";
		include 'libs/redirecting.php';
	exit();
}
include("../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Administrator Web</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo $base_url;?>adm_alrahma/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo $base_url;?>adm_alrahma/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo $base_url;?>adm_alrahma/css/site.css" rel="stylesheet">
	<link href="css/paging.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	<!-- Favicons-->
	<link rel="shortcut icon" href="<?php echo $base_url?>../../../img/favicon-alrahma.png" type="image/x-icon">
	<link rel="icon" href="<?php echo $base_url?>../../../img/favicon-alrahma.png" type="image/x-icon">
	<!-- font awesome -->
	<link href="<?php echo $base_url;?>adm_alrahma/js/jquery.dataTables.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
	<!-- JQUERY-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="adm_alrahma/../js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="../js/jquery.validate.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
 	<script type="text/javascript">
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });
	</script>
	</head>
<body>
<div class="container">
	<div class="navbar">
		<div class="navbar-inner">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">Admin Area</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li class="active">
							<a href="homeadmin.php">Dashboard</a>
						</li>
                        <li class="dropdown">
                        	<a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> Konfigurasi <b class="caret"></b></a>
	                        <ul class="dropdown-menu">
                            	<li>
                            		<a href="homeadmin.php?pg=user">User Settings</a>
	                            </li>
                        	</ul>
						</li>
					</ul>
					<ul class="nav pull-right">
						<li>
							<a href=""><i class="fa fa-user-secret"></i> User / pengguna saat ini adalah : <?php echo $_SESSION['username']; ?></a>
						</li>
						<li>
							<a href="auth/logout.php"  onclick="return confirm('Anda yakin ingin keluar sistem !!');"><i class="fa fa-sign-out"></i> Logout</a>
						</li>
					</ul>
				</div>
		</div>
	</div>
	<div class="row">
		<div class="span3">
			<div class="well" style="padding: 8px 0;">
				<ul class="nav nav-list">
					<li class="nav-header">Admin Menu</li>
					<li class="active">
						<a href="homeadmin.php?pg=dashboard"><i class="fa fa-home"></i> Dashboard</a>
					</li>
					<li>
					  	<a href="homeadmin.php?pg=news"><i class="fa fa-newspaper-o"></i> Tambah Berita</a>
					</li>
					<li>
					  	<a href="homeadmin.php?pg=career"><i class="fa fa-suitcase"></i> Tambah Career</a>
					</li>
         			<li>
				 	 	<a href="homeadmin.php?pg=slider"><i class="fa fa-picture-o"></i> Tambah Slider</a>
					</li>
					<li>
				 	 	<a href="homeadmin.php?pg=gallery"><i class="fa fa-picture-o"></i> Tambah Gallery</a>
					</li>
					<li>
				 	 	<a href="homeadmin.php?pg=event"><i class="fa fa-suitcase"></i> Tambah Event</a>
					</li>
					 <li>
				 	 	<a href="homeadmin.php?pg=contactus"><i class="fa fa-quote-right"></i> Man Contactus</a>
					</li>
					 <li>
				 	 	<a href="homeadmin.php?pg=mantestimoni"><i class="fa fa-comment"></i> Man Consultasi</a>
					</li>
					<li>
						<?php $rw=mysqli_query($con,"SELECT * FROM tujuan"); while($s=mysqli_fetch_array($rw)) { ?>
						<a href="homeadmin.php?pg=tujuan&id=<?php echo $s['id_tujuan']; ?>"><i class="fa fa-wrench"></i> Config Tujuan</a>
	 	 				<?php } ?>
					</li>
					<li>
						<?php $rw=mysqli_query($con,"SELECT * FROM visimisi"); while($s=mysqli_fetch_array($rw)) { ?>
	 	 				<a href="homeadmin.php?pg=visimisi&id=<?php echo $s['id_visimisi']; ?>"><i class="fa fa-wrench"></i> Config Visi & Misi </a>
	 	 				<?php } ?>
					</li>
				</ul>
			</div>
		</div>
		<div class="span9">
		<!-- get page -->
			<?php  include "libs/conf_pageadmn.php";?>
	  	</div>
	</div>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/site.js"></script>
</body>
</html>
