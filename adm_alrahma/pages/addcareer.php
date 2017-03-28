<div>
	<h3>Manage Career</h3>
</div>
<form method="post" action="proses/proses_career.php?act=addcareer" enctype="multipart/form-data">
	<div>
		<div style="margin-bottom:3%;">
			<label>Judul Career</label>
			<input type="text" name="judul_career" class="form-control" style="width:400px;">
		<div style="margin-bottom:3%;">
			<label>Kualifikasi</label>
			<textarea id="editor1" name="ket_career" rows="10" cols="80"></textarea>
		</div>
		<div>
			<label>Foto / Lampiran</label>
			<input type="file" name="foto" class="form-control" required>
		</div>
		<div style="margin-top:20px;">
			<input type="submit" class="btn btn-primary" name="button" id="button" value="Submit">
			<input type="submit" class="btn btn-danger" value="Batal" onclick="history.back();">	
		</div>
	</div>
</form>

<?php  include "conf_tinymce/txt_editor.php" ?>
