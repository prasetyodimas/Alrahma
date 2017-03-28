<?php include "libs/funct/library_function.php";?>
<div class="container">
	<div class="wrapper-outerspaces">
	<ul class="nav-ul-breadcumb">
		<li class="nav-li-breadcumb"><i class="fa fa-home"></i> Home >> News</li>
	</ul>
	<div class="wrapper-news">
		<div class="content-news">
			<div class="heading-block-news">
				<div style="float:left;padding:6px 8px;font-size:19px">
					<i class="fa fa-newspaper-o" aria-hidden="true"></i> Berita
				</div>
				<div class="main-formsearch-news">
				<form method="post" action="" id="frm1">
					<select class="select-news" name="status_news" onclick="selectVal();">
						<option>-- Filter Berita  --</option>
						<option>hits</option>
						<option>populer</option>
						<option>biasa</option>
					</select>
					<input type="submit" value="Search" class="btn-searching-news">
					<input type="hidden" name="news" value="<?php echo $var_action; ?>" size="20"/>
				</div>
			</div>
			<?php  
				
				$getnews = mysqli_query($con,"SELECT * FROM berita ORDER BY id_berita ");
				while ($view = mysqli_fetch_array($getnews)) {
				$pict   = $base_url."uploads/images/berita/".$view['foto_berita'];
				$convrt = $view['tanggal_berita'];
				$substr = substr($convrt, 10);
				//clean url 
				$cleanexecute = urlCleaner($view['judul_berita']);
				//url link
				$url_link = "newsdetail".$view['id_berita']."-".$cleanexecute.".html";
			?>
			<section class="block-innernews">
				<div style="float:right;">
					<p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo "Posted by admin ".tgl_indo($view['tanggal_berita']);echo $substr;?></p>
				</div>
				<div>
					<img src="<?php echo $pict;?>" class="box-imagenews img-responsive">
				</div>
				<div class="box-outerheading-news">
					<span class="heading-newsarticle">
						<a href="<?php echo $url_link; ?>"><?php echo removeStriptagS($view['judul_berita']);?></a>
					</span>
				</div>
				<article class="article-news">
					<?php  echo strip_tags($view['ket_berita']);?>
				</article>
				<div class="navigation-linknews">
					<?php
						echo "<a href=\"".$url_link."\" class='btn btn-default'>Read More</a>";
					?>
				</div>
			</section>
			<?php } ?>
		<?php
		  //=============CUT HERE for paging====================================
		  $tampil2 =mysqli_query($con,"select * from berita");
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
