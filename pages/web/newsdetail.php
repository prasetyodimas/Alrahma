<?php include "libs/funct/library_function.php"; ?>

<section class="container">
	<div class="wrapper-outerspaces">
		<ul>
			<li><i class="fa fa-home"></i> Home >> Detail News</li>
		</ul>
	</div>
	<div class="container-fluid">
		<div class="wrapper-detail-news">
			<div class="main-containnews">
				<?php
					$getnews    = mysqli_query($con,"SELECT * FROM berita WHERE id_berita='$_GET[id]'");
					while ($res = mysqli_fetch_array($getnews)) {
					$pictnews   = $base_url."uploads/images/berita/".$res['foto_berita'];

					$convrt = $res['tanggal_berita'];
					$substr = substr($convrt, 10);
				?>
			</div>
			<div class="box-innernews">
				<div class="heading-detail-news">
					<?php echo $res['judul_berita'];?>
				</div>
				<div>
					<img src="<?php echo $pictnews;?>" class="box-imagenewsdetail image-responsive">
				</div>
				<div class="informer-postedby">
					<p>Posted by admin: <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo tgl_indo($res['tanggal_berita']);echo $substr;?></p>
				</div>
				<article class="mainisi-news">
					<?php echo $res['ket_berita']; ?>
				</article>
			</div>
				<?php } ?>
			</div>
			<div class="main-content-newsother">
				<div class="heading-blockother">
					<h4>Berita Lainnya</h4>
					<div class="container-newsother">
						<div class="inner-containerothernews">
							<div class="col-md">
							<?php
								$limit  = 5;
								$getnews_detail = mysqli_query($con,"SELECT * FROM berita ORDER BY id_berita DESC LIMIT $limit");
								while ($res= mysqli_fetch_array($getnews_detail)) {
								
								$cleanexecute = urlCleaner($res['judul_berita']);
								//url other news
								$url_link = "newsdetail".$res['id_berita']."-".$cleanexecute.".html";

							?>
							</div>
							<div class="box-otherlinks">
								<ul class="ul-other-newsbox-links">
									<li class="li-other-newsbox-links">
										<a href="<?php echo $url_link; ?>"><?php echo $res['judul_berita'];?></a>
									</li>
								</ul>
								
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		<div style="margin-bottom:10%;"></div>
	</div>
</section>
