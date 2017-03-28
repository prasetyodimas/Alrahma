<?php 
	$get_query = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM berita WHERE id_berita ='$_GET[id]'"));
	$photo =$base_url."uploads/images/berita/".$get_query['foto_berita'];
?>
<div>
	<h3>Edit News</h3>
</div>
<form method="post" action="proses/proses_news.php?act=editnews&id=<?php echo $get_query['id_berita'];?>" enctype="multipart/form-data">
	<div>
		<div>
			<label>Judul Berita</label>
			<input type="text" style="width:300px;" name="judul_berita" value="<?php echo $get_query['judul_berita']; ?>" required="">
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
			<textarea id="editor1" name="ket_berita" rows="10" cols="80"  required=""><?php echo $get_query['ket_berita']; ?></textarea>
		</div>
		<div style="margin-top:10px;">
			<img src="<?php echo $photo;?>" class="sizing-img">
			<label>Foto /* kosongkan jika tidak ingin merubah foto</label>
			<input type="file" class="form-control" value="<?php echo $get_query['foto_berita']; ?>" name="foto_berita">
		</div>
		<div style="margin-top:20px;">
			<input type="submit" class="btn btn-primary" name="button" id="button" value="Edit">
			<input type="submit" class="btn btn-danger" value="Batal" onclick="history.back();">	
		</div>
	</div>
</form>

<?php  include "conf_tinymce/txt_editor.php" ?>

