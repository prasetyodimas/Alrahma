<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
	$("area[rel^='prettyPhoto']").prettyPhoto();

	//config autoslide and frameming gallery pretty foto
	$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:2000, autoplay_slideshow: false});
	$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',slideshow:20000, hideflash: true});

	$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
		custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
		changepicturecallback: function(){ initialize(); }
	});

	$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
		custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
		changepicturecallback: function(){ _bsap.exec(); }
	});

  });
</script>

<section class="container">
	<div class="wrapper-outerspaces">
		<ul class="nav-ul-breadcumb">
			<li class="nav-li-breadcumb"><i class="fa fa-home"></i> Home >> Gallery</li>
		</ul>
		<div class="wrapper-gallerys">
			<center>
		    	<h3>Gallery Al-Rahma Preschool and Kindergarten</h3>
			</center>
			<div class="container-gallery gallery">
			<?php

				$getgalle = mysqli_query($con,"SELECT * FROM gallery");
				while ($res = mysqli_fetch_array($getgalle)) {
				$photo = $base_url."uploads/images/gallery/".$res['foto_gallery'];
			?>
				<div class="box-gallery ">
					<a href="<?php echo $photo;?>" rel="prettyPhoto[pp_gal]" title="">
						<img class="sizing-gallery lazyOwl img-responsive" src="<?php echo $photo;?>" />
					</a>
					<div class="heading-text">
						<?php echo strip_tags($res['keterangan']); ?>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
		<div style="margin-bottom:50px;"></div>
	</div>
</section>
