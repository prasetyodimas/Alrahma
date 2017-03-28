<script type="text/javascript">
	$(document).ready(function(){
		var click_visimisi = $('.inner-visioncontainer-visimisi');
		var click_tujuan   = $('.inner-visioncontainer-tujuan');

		click_visimisi.click(function(){
			$('.hide-visimisi').slideToggle('slow');
		});
		click_tujuan.click(function(){
			$('.hide-tujuan').slideToggle('slow');
		});
	});
</script>

<section class="container">
	<div class="row content-alrahma">
		<div class="wrapper-outerspaces">
			<ul class="nav-ul-breadcumb">
				<li class="nav-li-breadcumb"><i class="fa fa-home"></i> Home >> About Us</li>
			</ul>		
			<h3>ABOUT US</h3>
			<div class="row">
				<div class="main-aboutimages col-md-4">
					<img src="img/children.png" class="resize-imgabout image-responsive ">
				</div>
				<div class="konsep-pendidikan-container col-xs-12 col-md-8"><h3>Konsep Pendidikan</h3>
					<article>
						Adopsi sistem pendidikan yang akan diterapkan di “AL-Rahma” adalah ajaran Ki Hajar Dewantara 
						dan panduan-panduan pendidikan dari Depdikbud (kurikulum yang berlaku), serta metode pendidikan masa kini dengan
						tetap menitikberatkan pada pendidikan aqidah, akhlak, karakter, etika, sopan santun dan penghormatan kepada kedua orang
						tua, orang yang lebih tua dan kasih sayang kepada sesama dengan 
						metode senang belajar dan belajar dengan senang, sesuai sifat dan keceriaan dunia anak.
					</article>
				</div>
			</div>

			<div class="main-artic main-visi-misi">
				<h3>"Visi Misi"</h3>
				<div class="sixteen columns" style="margin-left:0px !important;">
					<div class="box-vision ">
						<div class="inner-visioncontainer-visimisi">
							<i class="fa fa-plus-square-o" style="color:#BF5371;cursor:pointer;"></i>
							<a style="text-decoration:none;color:#BF5371;cursor:pointer;"> Misi & Visi Al - Rahma Preschol & Kindergarten </a>
							<div class="hide-visimisi" style="display:none;">
		 						<?php 
		 							$x = mysqli_query($con,"SELECT * FROM visimisi");
		 							while ($res = mysqli_fetch_array($x)) {
		 								echo $res['ket_visimisi'];
		 							}
		 						?>
							</div>
						</div>
					</div>
				</div>
				<h3>"Tujuan"</h3>
				<div class="sixteen columns" style="margin-left:0px !important;">
					<div class="box-vision">
						<div class="inner-visioncontainer-tujuan">
							<i class="fa fa-plus-square-o" style="color:#BF5371;cursor:pointer;"></i>
							<a style="text-decoration:none;color:#BF5371;cursor:pointer;"> Tujuan Al - Rahma Preschol & Kindergarten </a>
							<div class="hide-tujuan" style="display:none;">
								<?php 
		 							$x = mysqli_query($con,"SELECT * FROM tujuan");
		 							while ($res = mysqli_fetch_array($x)) {
		 								echo $res['ket_tujuan'];
		 							}
		 						?>
							</div>
						</div>
					</div>
				</div>
			</div>

				<div style="margin-bottom:20%;"></div>
			</div>
	</div>
</section>
