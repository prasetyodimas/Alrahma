<?php include "libs/funct/library_function.php"; ?>

<section class="container">
	<div class="wrapper-outerspaces">
		<ul>
			<li><i class="fa fa-home"></i> Home >> Detail Career </li>
		</ul>
		<div class="wrapper-detailcareer">
			<?php 
				$x =mysqli_query($con,"SELECT * FROM career WHERE id_career='$_GET[id]'");
				while ($data = mysqli_fetch_array($x)) {	
			?>
			<div class="main-detailcareer">
				<div class="judul-career">
					<h3><?php echo $data['judul_career'];?></h3>
				</div>
				<div class="career-images">
					<div class="">
						<img class="career-viewstyle" src="<?php echo $base_url;?>uploads/images/career/<?php echo $data['foto']; ?>">
					</div>
					<div class="article-details" style="margin-bottom:40px;">
						<p><?php echo $data['ket_career']; ?></p>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>