<script type="text/javascript">
	$(document).ready(function(){
		//Defaults for all options can be modified directly by changing values in the $.fn.datepicker.defaults hash
		$.fn.datepicker.defaults.format = "yyyy/mm/dd";
		$('.date-event').datepicker();
	});
</script>

<?php 

	$getevent =mysqli_fetch_array(mysqli_query($con,"SELECT * FROM event WHERE id_event='$_GET[id]'"));
	$photo   =$base_url."uploads/images/event/".$getevent['foto_event'];
?>

<div>
	<h3>Edit Event</h3>
</div>
<form method="post" action="proses/proses_event.php?act=editevent&id=<?php echo $getevent['id_event'];?>" enctype="multipart/form-data">
	<div>
		<div>
			<label>Judul Event</label>
			<input type="text" name="judul_event" value="<?php echo $getevent['judul_event']; ?>" required="">
		</div>
		<div>
			<label>Tangal Event</label>
			<input type="text" name="tgl_event" class="date-event" value="<?php echo $getevent['tanggal_event'];?>" required="">
		</div>
		<div>
			<label>Keterangan Event</label>
		<textarea name="keterangan_event" id="editor1" required=""><?php echo strip_tags($getevent['keterangan_event']); ?></textarea>
		</div>
		<div style="margin-top:10px;">
			<label>Foto Event</label>
			<img src="<?php echo $photo;?>" class="sizing-img">
			<input type="file" name="foto_lama" class="form-control">
		</div>
		<div style="margin-top:20px;">
			<input type="submit" class="btn btn-primary" name="button" id="button" value="Edit">
			<input type="submit" class="btn btn-danger" value="Batal" onclick="history.back();">	
		</div>
	</div>
</form>

<?php  include "conf_tinymce/txt_editor.php" ?>
