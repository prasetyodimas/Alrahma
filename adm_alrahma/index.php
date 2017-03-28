<?php session_start();
	include ("../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!--<link href="css/site.css" rel="stylesheet">-->
	<link href="css/login-style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $base_url;?>css/font-awesome-4.6.3/css/font-awesome.min.css">
	<!-- Favicons-->
	<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery.validate.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/site.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#validate-formlog').validate({
			rules:{
				username:{
						required:true,
				},
				password:{
						required:true,
				}
			},
			messages:{
				username :"Nama anda tidak boleh kosong !!",
				password:{
					required:'Password anda tidak boleh kosong !!'
				},
			}

		});
		//show message alert bounce !! 
	    /*$('.log-btn').click(function(){
		   $('.log-status').addClass('wrong-entry');
	       $('.alert').fadeIn(500);
	       setTimeout( "$('.alert').fadeOut(1500);",3000 );
	    });
	    $('.form-control').keypress(function(){
	       $('.log-status').removeClass('wrong-entry');
	    });*/
	});
</script>
</head>
<style type="text/css">
	.error{
		color: #f00;
		font-size: 13px;
	}
</style>
<body class="bg-full-page">
	<div id="login-page" class="container">
		<form id="validate-formlog" action="auth/proseslogin.php" method="post" enctype="multipart/form-data">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 top-upper">
					<div class="col-md-5 col-md-offset-3">
						<div class="login-form">
							<h3>Administrator </h3>
							<div class="form-group form-group-custom-ico">
								<input type="text" class="form-control" name="username" placeholder="Username">
								<i class="fa fa-user"></i>
							</div>
							<div class="form-group-custom-ico">
								<input type="password" class="form-control" name="password" placeholder="Password">
								<i class="fa fa-lock"></i>
							</div>
							<span class="alert">Invalid Credentials</span>
							<a class="link" href="#">Lost your password?</a>
								
							<button type="submit" class="log-btn">Log in</button>
							<div class="copy-right-postion">Development &copy; 2016 - <?php echo date("Y");?> AL Rahma Presschol and Kindergarten</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>	
	</div>
</body>
</html>

