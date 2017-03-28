<?php include "libs/funct/library_function.php";

	$getevent =mysqli_fetch_array(mysqli_query($con,"SELECT * FROM event WHERE id_event='$_GET[id]'"));

?>
<section class="container">
	<div class="wrapper-outerspaces">
		<div>
			<ul>
				<li><i class="fa fa-home"></i> Home >> Detail Event</li>
			</ul>
		</div>
		<div class="eventdetail-container">
			<div class="wrapper-resize-img">
				<img class="resize-imgevent-detail" src="<?php echo $base_url;?>uploads/images/event/<?php echo $getevent['foto_event']; ?>">
			</div>
			<div class="main-box-event-detail">
				<h3><?php echo $getevent['judul_event']; ?></h3>
				<p>Posted by : admin <i class="fa fa-calendar-o"></i> <?php echo tgl_indo($getevent['tanggal_event']);?></p>
				
				<article>
					<?php echo removeStriptagS($getevent['keterangan_event']); ?>
				</article>
			</div>
			<div style="margin-top:31%;display:inline-block;"></div>
		</div><!-- eventdetail-container -->
	</div>
</section>
