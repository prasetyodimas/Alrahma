<section class="container">
	<ul class="nav-ul-breadcumb">
		<li class="nav-li-breadcumb"><i class="fa fa-home"></i> Home >> Event</li>
	</ul>
	<center>
    	<h3>Event Al-Rahma Preschool and Kindergarten</h3>
	</center>  
	<div class="wraperouter-event">
		<ul class="nav-ul-event">
		<?php 

			$getgalle = mysqli_query($con,"SELECT * FROM event");
			while ($res = mysqli_fetch_array($getgalle)) {
			$photo = $base_url."uploads/images/event/".$res['foto_event'];
		?>
	        	<li class="nav-li-event">
	            	<div class="port-1 effect-1">
	                	<div class="image-box">
	                    	<img src="<?php echo $photo;?>" alt="Image-1" class="event-imglistener img-responsive">
	                    </div>
	                    <div class="text-desc">
	                    	<h3 style="color:#faa801;"><?php echo strip_tags($res['judul_event']);?></h3>
	                        <p><?php echo strip_tags($res['keterangan_event']); ?></p>
	                    <!-- 	<a href="#" class="btn">View more</a> -->
	                    </div>
	                </div>
	            </li>
			<?php } ?>
	      	</ul>
	  	<div style="margin-bottom:0px;display:inline-block;"></div>
  	</div>
</section>

      