<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include"config/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Al – Rahma Preschool and Kindergarten</title>
<!-- ANALYTICS JS -->
<meta charset="utf-8">
<meta name="author" content="Al-Rahma Presschool and Kindergarten <vladclaystudios>">
<meta name="description" content="Al-Rahma.id  Al Rahma School, Konsultan pendidikan, Konsultasi, Study, Pembelajaran Terpadu, Belajar Dan Bermain, Edukasi, Interaktif, Dunia Anak-anak, PAUDTKSD, Alquran, Sekolah Anak, AlRahma Presschool and Kindergarten sekolah dan yayasan konsultasi,dunia pembelajaran anak-anak,dunia perkembangan anak sebelum memasuki pra sekolah, menerapkan sistem alquran sebagai media dan metode pembelajarannya, Alrahma, PAUDTKSD">
<meta name="keywords" content="Al-Rahma.id, Al Rahma School, Konsultan pendidikan, Konsultasi, Study, Pembelajaran Terpadu, Belajar Dan Bermain, Edukasi, Interaktif, Dunia Anak-anak, PAUDTKSD, Alquran, Sekolah Anak, AlRahma Presschool and Kindergarten sekolah dan yayasan konsultasi,dunia pembelajaran anak-anak,dunia perkembangan anak sebelum memasuki pra sekolah, menerapkan sistem alquran sebagai media dan metode pembelajarannya, Alrahma, PAUDTKSD">
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- FAVICONS-->
<link rel="shortcut icon" href="<?php echo $base_url?>img/favicon-alrahma.png" type="image/x-icon">
<link rel="icon" href="<?php echo $base_url?>img/favicon-alrahma.png" type="image/x-icon">
<!-- CSS -->
<link rel="stylesheet" href="<?php echo $base_url;?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $base_url;?>css/theme/css/layout.css">
<link rel="stylesheet" href="<?php echo $base_url;?>css/lightbox.css">
<link rel="stylesheet" href="<?php echo $base_url;?>js/slick/slick.css">
<link rel="stylesheet" href="<?php echo $base_url;?>js/slick/slick-theme.css">
<link rel="stylesheet" href="<?php echo $base_url;?>css/pretty_photo/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8"/>
<link rel="stylesheet" href="<?php echo $base_url;?>css/paging.css">
<link rel="stylesheet" href="<?php echo $base_url;?>css/font-awesome-4.6.3/css/font-awesome.min.css">
<!-- OWL CAROUSEL Theme -->
<link rel="stylesheet" href="<?php echo $base_url;?>js/owl-carousel/owl.theme.css">
<link rel="stylesheet" href="<?php echo $base_url;?>js/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="<?php echo $base_url;?>js/owl-carousel/owl.transitions.css">
<!-- JQUERY JS -->
<script type="text/javascript" src="<?php echo $base_url; ?>js/jquery-1.9.1.min.js"></script>
<script src="<?php echo $base_url?>js/jquery.validate.js"></script>
<script src="<?php echo $base_url;?>js/app-main-alrahma.js"></script>
<script src="<?php echo $base_url;?>js/bootstrap.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="<?php echo $base_url;?>js/slick/slick.js"></script>
<script src="<?php echo $base_url;?>js/pretty-foto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $base_url;?>js/gallery.js"></script>
<script src="<?php echo $base_url;?>js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript">
	$(window).scroll(function () {
        if ($(document).scrollTop() <= 40) {
            $('#header-full').removeClass('small');
            $('.tabs-blur').removeClass('no-blur');
            $('#main-header').removeClass('small');
        } else {
            $('#header-full').addClass('small');
            $('.tabs-blur').addClass('no-blur');
            $('#main-header').addClass('small');
        }
    });
</script>
</head>
<style type="text/css">
	#main-header.small {
	    height: 60px;
	    position: fixed;
	}
	#header-full.small {
	    height: 60px;
	    transition: height 0.2s ease-in-out;
	    -webkit-transition: height 0.2s ease-in-out;
	    -moz-transition: height 0.2s ease-in-out;
	    -o-transition: height 0.2s ease-in-out;
	    -ms-transition: height 0.2s ease-in-out;
	    box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	}
</style>
<body>
<!-- responsive menu on mobile device -->
	<div class="container navigate-top-upper">
		<header>
			<div class="site-headers col-lg-12 col-md-6 col-xs-12 col-sm-12">
				<div class="col-sm-12">
					<div class="row">
						<div class="pull-left col-sm-12 col-lg-3">
		        			<img src="img/alrahma-logos.png" class="img-responsive" style="width:185px;height:auto;margin-top: 15px;">
							<h6 class="text-center"><strong>AL-RAHMA PRESSCHOOL & KINDERGARTEN</strong></h6>
						</div>
						<div class="pull-left main-topupper-head">
							<div class="col-sm-12 col-md-6 col-lg-12">
								<div class="container-header">
									<h2 class="sub-title">Al Rahma</h2>
									<h3 class="second-title">Preschol And Kindergarten</h3>
									<h5 class="third-title">Jln.Linggamas No 8 Sokaraja Wetan Banyumas 53181</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
			<div class="col-md-7">
				<div class="main-top-contain-right">
					<ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
		          	</ul>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
	            <span class="sr-only">Toggle Responsive</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </button>
	    </div>
		<?php $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
			if($url == $base_url."home.html") {$url_home = "current"; } 
			elseif ($url== $base_url."gallery.html") {$url_gallery ="current"; } 
			elseif ($url== $base_url."event.html") {$url_event ="current"; } 
			elseif ($url== $base_url."news.html") {$url_news ="current"; } 
			elseif ($url== $base_url."about.html") {$url_about ="current"; } 
			elseif ($url== $base_url."contact.html") {$url_contact ="current"; } 
			elseif ($url== $base_url."consultasi.html") {$url_consultation ="current"; } 
			elseif ($url== $base_url."career.html") {$url_career ="current"; } 
		?>
		 <div class="container">
	        	<div class="row"> 
					<div id="logo"></div>
					<div class="collapse navbar-collapse col-md-offset-1" id="navbar-collapse">
						<!-- id="main-nav" class="sf-menu" -->
						<ul class="nav navbar-nav">
							<li><a href="<?php echo $base_url; ?>home.html" id="<?php echo $url_home;?>">Home</a></li>
							<li><a href="<?php echo $base_url; ?>gallery.html" id="<?php echo $url_gallery;?>">Gallery</a></li>
							<li><a href="<?php echo $base_url; ?>news.html" id="<?php echo $url_news;?>">News</a></li>
							<li><a href="<?php echo $base_url; ?>event.html" id="<?php echo $url_event;?>">Event</a></li>
							<li><a href="<?php echo $base_url; ?>about.html" id="<?php echo $url_about;?>">About Us</a></li>
							<li><a href="<?php echo $base_url; ?>contact.html" id="<?php echo $url_contact;?>">Contact Us</a></li>
							<li><a href="<?php echo $base_url; ?>consultasi.html" id="<?php echo $url_consultation;?>">Consultation</a></li>
							<li><a href="<?php echo $base_url; ?>career.html" id="<?php echo $url_career;?>">Career</a></li>
						</ul>
					</div>
	        	</div>
	        </div><!--container-->
		</nav><!-- end main nav -->
	</div><!-- end container -->
	<!--================================ CONTENT START HERE ========================================-->
	<div class="wrapper-coantainer-moduls">
		<div class="container-fluid">
			<?php  include "libs/funct/conf_page.php";?>
		</div>
	</div>
	<div class="main scroll-to">
		<a id="balikkeatas" onclick="keatas()"><img src="<?php echo $base_url;?>img/arrows.png"></a>
	</div>
		<footer>
			<div class="container">
			    <div class="main-innerfooter">
			    	Copyright © <?php echo "Al-Rahma Preschool and Kindergarten ".date("Y");?>
			    </div>
			    <ul id="nav-footer">
			    	<li class="li-nav-alrahma">
		    			<span><a href=""><img src="img/instagram.png"></a></span>
		    			<span style="margin-left:3px;"><a href=""><img src="img/facebook.png"></a></span>
		    			<span style="margin-left:3px;"><a href=""><img src="img/twitter.png"></a></span>
			    	</li>
			    </ul>
			</div>
		</footer><!-- footer  -->
	</div>
</body>
</html>

