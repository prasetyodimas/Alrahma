<?php include "libs/funct/library_function.php"; ?>
<script type="text/javascript">
	//jquery slick slider
	$(document).on('ready', function() {
      $(".slider-navalrahma").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1

      });
  	//function add and remove content automatically
	var first = 0;
	var speed = 800;
	var pause = 10000;
		function removeFirst(){
			first = $('.consultation ul li:first').html();
			$('.consultation ul li:first')
			.animate({opacity: 0}, speed)
			.slideUp('slow', function() {$(this).remove();});
			addLast(first);
		}

		function addLast(first){
			last = '<li style="display:none;">'+first+'</li>';
			$('.consultation ul').append(last)
			$('.consultation ul li:last')
			.animate({opacity: 1}, speed)
			.fadeIn('slow')
		}
	interval = setInterval(removeFirst, pause);
	//  EVENT CAROUSEL HOOK
    $('#event-testimonials').owlCarousel({
        loop: true,
        center: true,
        lazyLoad :true,
        transitionStyle : "backSlide",
        items: 1,
        margin: 0,
        autoPlay: true,
        dots:true,
        smartSpeed: 450,
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 2
          },
          1170: {
            items: 3
          }
        }
    });
});
</script>
<!-- ====================== SLIDER ================-->
<!-- Margin top container slider -->
<div class="row">
	<div class="col-lg-10 col-lg-offset-1">
		<div id="owl-example" class="owl-carousel owl-theme hidden-xs" style="box-shadow: #dcdcdc 0px 3px 28px; border: 5px solid #fff;">
			 <?php
			 	$x =mysqli_query($con,"SELECT * FROM slider");
			 	while ($data= mysqli_fetch_array($x)) {
			 	$photo = $base_url."uploads/images/slide/".$data['foto_slider'];
			 ?>
		  		<img class="item-resizeimg lazyOwl" data-src="<?php echo $photo;?>">
			 <?php } ?>
		</div>
	</div>
</div>
<!-- ====================== SLIDER ================-->
<div class="row">
	<div class="wrapper-containertopbase"></div>
	<!-- ====================== CONTENT TUJUAN PENDIDIKAN ALRAHMA ================-->
	<div class="tujuan-maincontainer">
	<section class="article-tujuan">
		<div class="heading-responsive">
			<h2 style="text-align:center;color:#fff;">Mengapa Al-Rahma Preschool and Kindergarten</>
		</div>
		<div class="wrapperbox-tujuanalrahma">
			<section class="container">
				<div class="row press-rows-alrahma">
					
					<div class="col-md-4 ">
						<div class="main-innerboxt-tujuanalrahma">
							<div class="box-circletujuanalquran">
								<span class="ico icon-alquran"></span>
							</div>
							<div class="content-tujuan">
								Menerapkan sistem pendidikan yang berfokus pada AkhlaQ , AQidah dan Keimanan pada AL-Quraan.
							</div>
						</div>
					</div>

					<div class="col-md-4 ">
						<div class="main-innerboxt-tujuanalrahma ">
							<div class="box-circletujuanmind">
								<span class="ico icon-mind"></span>
							</div>
							<div class="content-tujuan">
								Membentuk karakter sang insan tentang kepribadian beretika, sopan santun, dan penghormatan kepada orang tua.
							</div>
						</div>
					</div>

					<div class=" col-md-4 ">
						<div class="main-innerboxt-tujuanalrahma">
							<div class="box-circletujuangrup">
								<span class="ico icon-grup"></span>
							</div>
							<div class="content-tujuan">
								Membentuk karakter sang insan tentang kepedulian terhadap sesama, kasih sayang, serta metode belajar dengan senang dan
								senang untuk belajar.
							</div>
						</div>
					</div>
				</div><!--row-->	
			</section><!--container-->
		</div><!--wrapperbox-tujuanalrahma-->
<!-- ====================== CONTENT TUJUAN PENDIDIKAN ALRAHMA ================-->
<div class="event-maincontainer">
		<section class="article-container">
			<div class="heading-responsive">
				<h2 style="text-align:center;margin-bottom:50px;">Event Al-Rahma Preschool and Kindergarten</h2>
			</div>
			<!-- RESPONSIVE -->
			<div class="article-mainevent">
				<article></article>
			</div>
		</section>
		<!-- TESTIMONIALS EVENT -->
		<section class="container testimonials">
			<div class="row">
		        <div class="col-sm-12">
		          <div id="event-testimonials" class="owl-carousel">
		      	  <?php

					$getevent =mysqli_query($con,"SELECT * FROM event ORDER BY id_event DESC");
					while ($res = mysqli_fetch_array($getevent)) {

				   ?>
		            <div class="item">
		              <div class="shadow-effect">
		                <img class="img-circle resize-imgevent lazyOwl" data-src="<?php echo $base_url;?>uploads/images/event/<?php echo $res['foto_event']; ?>" alt="">
		                <h3 class="heading-sliderevent"><?php echo removeStriptagS($res['judul_event']);?></h3>
		                <p style="font-style:italic;"><?php echo removeStriptagS($res['keterangan_event']);?>
		              		<?php  echo "<a href='".$base_url."eventdetail-$res[id_event].html' class='readmore-link'>Readmore</a>" ?>
		                </p>
		              </div><!-- shadow effect-->
		            </div><!-- item-->
		           <?php } ?>
		          </div><!--event-testimonials-->
		        </div><!--col-sm-12-->
			</div><!--row-->
		</section>
</div><!-- event-maincontainer -->
	<div class="container">	
		<div class="main-konsultasi">
			<div class="heading-konsultasi">
				<h2 style="text-align:center;">Konsultasi Al-Rahma Preschool and Kindergarten</h2>
			</div>
			<section class="container hidden-xs">
				<div class="box-ruleskonsultasi">
					<div class="rules-rulkonsultasi icon-formulir"></div>
						<div>
							<div>Formulir Konsultasi</div>
							<span class="number1"></span>
						</div>
				</div>
				<div class="box-ruleskonsultasi">
					<div class="rules-rulkonsultasi icon-boxproses"></div>
						<div>
							<div>Sistem Mengirim Data</div>
							<span class="number2"></span>
						</div>
				</div>
				<div class="box-ruleskonsultasi">
					<div class="rules-rulkonsultasi icon-chats"></div>
						<div>
							<div>Konsultasi dengan kami</div>
							<span class="number3"></span>
						</div>
				</div>
			</section>
			<div id="tabs-container">
				<ul class="tabs-menu">
					<li class="current"><a href="#tab-1"><i class="fa fa-book" aria-hidden="true"></i> Latest Consultation</a></li>
				</ul>
				<div class="wrapper-latestcontainer consultation">
					<ul>
						<?php
							//set limits
							$limit =4;
							// random consultasi
							$get_consultasi = mysqli_query($con,"SELECT * FROM testimoni ORDER BY id_testimoni DESC LIMIT $limit");
							while ($res =mysqli_fetch_array($get_consultasi)) {
							$convrt = $res['tgl_testi'];
							$substr = substr($convrt, 10);
							$getanswer = $res['id_testimoni'];

							$tes = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM analisa_testi at JOIN testimoni t  ON t.id_testimoni=at.id_testimoni
							WHERE at.id_testimoni='$getanswer'"));
							$showaction= $tes['answer_testi'];
							$convrtanswer_date = $tes['tgl_answer'];
							$substr2 = substr($convrtanswer_date, 10);

						?>
						<li style="opactiy:1;">
							<div style="font-size:17px;">
								<span style="font-weight:bold;"><?php echo $res['nama_testi'];?></span>
							</div>
							<div style="margin-bottom:10px;">
								<span><i class="fa fa-calendar-o"></i> <?php echo tgl_indo($res['tgl_testi']);echo $substr;?></span>
							</div>
							<div>
								<?php echo $res['keluhan_testi']; ?>
							</div>
							<!--check jika tidak ada tanggapan dari admin css style anwer do'not show in container-->
							<?php if ($showaction =='' || $showaction == null) { ?>

							<?php }else{ ?>
							<div class="consul">
								<div class="answer">
									<div class="user-images">
										<div style="margin-left:45px;font-weight:bold;">Jawaban dari : <?php echo $tes['sesi_user'];?></div>

										<span class="admin-rounded-date">
										<i class="fa fa-calendar-o"></i> <?php echo tgl_indo($res['tgl_testi']);echo $substr2;?></span>
									</div>
									<?php echo $showaction; ?>
								</div>
							</div>
							<?php } ?>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div>
				<a href="<?php echo $base_url;?>consultasi.html" class="btn btn-danger"><i class="fa fa-plus"></i> Konsultasi Sekarang</a>
			</div>
		</div><!-- container -->
	</div>
	<!-- CONTENT SLIDER -->
	<section class="section home-blog hidden-xs">
	    <div class="max-width centered ">
	        <div class="blog-carousel ">
				<section class="slider-navalrahma slider">
		    		<?php

		    			$show =mysqli_query($con,"SELECT * FROM berita ORDER BY id_berita DESC");
		    			while ($view= mysqli_fetch_array($show)) {

		    			//url basepath file
						$base_path_file  = $base_url."uploads/images/berita/".$view['foto_berita'];
						$karakter_career = $view['ket_berita'];
						$konvert_career  = strip_tags(html_entity_decode($karakter_career,ENT_QUOTES,"ISO-8859-1"));

		    			//url judul cleaner 
		    			$clean = urlCleaner($view['judul_berita']);
						//url link
						$url_link = "newsdetail".$view['id_berita']."-".$clean.".html";
		    		?>
			    	<div class="wrapper">
						<h4 style="margin-bottom:10px;"><a href=""><?php echo strip_tags($view['judul_berita']);?></a></h4>
			      		<!-- <img src="<?php echo $base_path_file;?>"> -->
			      		<article data-lazy="">
			      			<div style="margin-bottom:10px;">Posted tanggal: <?php echo tgl_indo($view['tanggal_berita']);?></div>
	      				<?php

						  if (strlen($karakter_career) >=300) {
							/*echo substr($konvert_career, 0, 300)."<a class='readmore-link' href='".$base_url."newsdetail-$view[id_berita].html'> [Readmore]</a>"; } */
							echo substr($konvert_career, 0, 300)."<a class='readmore-link' href=\"".$url_link."\"> [Readmore]</a>"; }
				      	?>
				      	</article>
			      	</div>
			      	<?php } ?>
			    </section><!--regular slider-->
	        </div><!--Blog carousel -->
	    </div><!--max width centered-->
	</section><!-- section end blog -->
</div>
