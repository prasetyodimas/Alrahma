<script type="text/javascript">
	$(document).ready(function(){
		//Defaults for all options can be modified directly by changing values in the $.fn.datepicker.defaults hash
		$.fn.datepicker.defaults.format = "yyyy/mm/dd";
		$('.date-event').datepicker();
	});
</script>
<div>
	<h3>Manage Event</h3>
</div>
<form method="post" action="proses/proses_event.php?act=addevent" enctype="multipart/form-data">
	<div>
		<div>
			<label>Judul Event</label>
			<input type="text" name="judul_event" required="">
		</div>
		<div class="input-group date">
			<label>Tangal Event</label>
    		<input type="text" name="tgl_event" class="form-control date-event">
		</div>
		<div style="margin-bottom:15px;">
			<label>Foto Event</label>
			<input type="file" name="foto_event" class="form-control" required="">
		</div>
		<div>
			<label>Keterangan Event</label>
			<textarea name="keterangan_event" id="editor1" required=""></textarea>
		</div>
		<div style="margin-top:20px;">
			<input type="submit" class="btn btn-primary" name="button" id="button" value="Submit">
			<input type="submit" class="btn btn-danger" value="Batal" onclick="history.back();">	
		</div>
	</div>
</form>

<?php  include "conf_tinymce/txt_editor.php" ?>
