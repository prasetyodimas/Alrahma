<div>
	<h3>Manage Slider</h3>
</div>
<form method="post" action="proses/proses_slider.php?act=addslider" enctype="multipart/form-data">
	<div>
		<div style="margin-bottom:3%;">
			<label>Foto</label>
			<input type="file" name="foto_slider" class="form-control" required="">
		</div>
		<!-- <div>
			<label>Keterangan</label>
			<textarea id="editor1" name="keterangan" rows="10" cols="80" required></textarea>
		</div> -->
		<div style="margin-top:20px;">
			<input type="submit" class="btn btn-primary" name="button" id="button" value="Submit">
			<input type="submit" class="btn btn-danger" value="Batal" onclick="history.back();">	
		</div>
	</div>
</form>

<?php  include "conf_tinymce/txt_editor.php" ?>
