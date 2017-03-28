<div>
	<h3>Add News</h3>
</div>
<form method="post" action="proses/proses_news.php?act=addnews" enctype="multipart/form-data">
	<div>
		<div>
			<label>Judul Berita</label>
			<input type="text" name="judul_berita" required="" style="width:400px;">
		</div>
		<div>
			<label>Status Berita (ex : hits / populer )</label>
			<select name="status_news" autofocus required="">
				<option value="">Choose Status</option>
				<option value="hits">hits</option>
				<option value="populer">populer</option>
				<option value="biasa">biasa</option>
			</select>
		</div>
		<div>
			<label>Keterangan</label>
			<textarea id="editor1" name="ket_berita" rows="10" cols="80"  required></textarea>
		</div>
		<div style="margin-bottom:3%;">
			<label>Foto</label>
			<input type="file" class="form-control" name="foto_berita" required="">
		</div>
		<div style="margin-top:20px;">
			<input type="submit" class="btn btn-primary" name="button" id="button" value="Submit">
			<input type="submit" class="btn btn-danger" value="Batal" onclick="history.back();">	
		</div>
	</div>
</form>

<?php  include "conf_tinymce/txt_editor.php" ?>

