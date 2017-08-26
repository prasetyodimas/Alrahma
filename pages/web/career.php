<?php include "libs/funct/library_function.php"; ?>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    	$("area[rel^='prettyPhoto']").prettyPhoto();
    	//config autoslide and frameming gallery pretty foto
    	$(".career:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:2000, autoplay_slideshow: false});
    	$(".career:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:20000, hideflash: true});
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
		<ul>
			<li><i class="fa fa-home"></i> Home >> Career </li>
		</ul>
		<div>
			<h3 style="color:#000;">KARIR</h3>
		</div>
		<div style="margin-bottom:50px;">
			<h5 style="line-height:20px;">
				Sumber daya manusia khususnya staff pengajar adalah hal penting dalam sebuah pendidikan, untuk membentuk karakter manusia yang lebih baik,
				untuk itu Al-Rahma Preschool and kindergarten peduli terhadap pengelolaan SDM melalui peningkatan kompetensi dan motivasi secara berkesinambungan.
				Kami membuka kesempatan untuk kandidat terbaik mengisi beberapa posisi di bawah ini
			</h5>
		</div>
	  	<div class="contain-carerrborder">
	    <div class="heading-bordered">
	      <div style="margin-left: 10px;">
	        <i class="fa fa-briefcase" aria-hidden="true"></i> Peluang Karier
	      </div>
	    </div>
	</div>
	<?php
		include "libs/funct/paging.php";
		//variable paging mencari posisi batas
		$p= new Paging_careeruser;
		$batas=5;
		$posisi=$p->cariPosisi($batas);

		$getcareer   = mysqli_query($con,"SELECT  * FROM career LIMIT $posisi, $batas");
		while ($data = mysqli_fetch_array($getcareer)) {
		//filter judul 
		$filter_judul = preg_replace("/\s/","-",$data['judul_career']);
		//url career detail
		$url_link 	  = "careerdetail".$data['id_career']."-".$filter_judul.".html";

		$CarerrModel = mysqli_query($con,"SELECT * FROM career");
	    $jmldata 	 = mysqli_num_rows($CarerrModel);
	?>

	<div class="wrapper-carerralrahma block-innercareer">
		<!--Tanggal Posted -->
	    <div class="career-dateandtime">
	      <p>Posted by : Admin  <i class="fa fa-calendar-o"></i> 
	      	<?php echo tgl_indo($data['tgl_posting']);?>
	      </p>
	    </div>
	    <section class="career box-img">
	        <a href="<?php echo $base_url?>uploads/images/career/<?php echo $data['foto'];?>" rel="prettyPhoto" >
	        <img class="career-viewstyle" src="<?php echo $base_url?>uploads/images/career/<?php echo $data['foto'];?>"></a>
			<div data-tittle='judul-career'>
	  			<h3><?php echo $data['judul_career'];?></h3>
			</div>
			<div class="heading-career">
				<div data-title='ket_career'>
	      			<?php echo ($data['ket_career']);?>
				</div>
	        </div>
	    </section>
	    <div style="margin-top:20px;display:inline-block;">
		<?php 
	 		echo "<a href=\"".$url_link."\" class='btn btn-default'>Read More</a>";
		?>
	    </div>
	</div><!-- wrapper-carerralrahma block-innercareer -->
	<?php } ?>

	<?php
	//=============CUT HERE for paging====================================
	  $tampil2 =mysqli_query($con,"select * from career");
	  $jmldata =mysqli_num_rows($tampil2);
	  //menampilkan jumlah_datatotal data
	  echo " <div class='main-wrapperpagging'>
	            <div>Jumlah : <span class='datecolor'>data yang ditampilkan $batas dari $jmldata data </span></div>
	         </div>";
	  //menampilkan link halaman ?>
	  <div class='main-containernav'>
	    <div class='inner-nav-link'>
	        <div class='pagination'>
	            <ul>
	            <?php
	                $jmlhalaman   = $p->jumlahHalaman($jmldata, $batas);
	                $linkHalaman  = $p->navHalaman($_GET['halaman'], $jmlhalaman);
	                echo  $linkHalaman;
	            ?>
	            </ul>
	        </div>
	    </div>
	  </div>
	  <div style="margin-bottom:160px;"></div>
</section>
