<?php

	$get_gall =mysqli_fetch_array(mysqli_query($con,"SELECT * FROM gallery WHERE id_gallery='$_GET[id]'"));
	$photo_gallery =$base_url."uploads/images/gallery/".$get_gall['foto_gallery'];
?>
<div>
	<h3>Edit Gallery</h3>
</div>

<form method="post" action="proses/proses_gallery.php?act=editgallery&id=<?php echo $get_gall['id_gallery'];?>" enctype="multipart/form-data">
	<div>
		<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
		<div style="margin-bottom:10px;">
			<label>Keterangan</label>
			<textarea id="editor1" name="keterangan" rows="10" cols="80"><?php echo strip_tags($get_gall['keterangan']);?></textarea>
		</div>
		<div style="margin-bottom:3%;">
			<img src="<?php echo $photo_gallery;?>" class="sizing-img">
			<label>Foto</label>
			<input type="file" name="foto_gallery" class="form-control">
		</div>
		<div style="margin-top:20px;">
			<input type="submit" class="btn btn-primary" name="button" id="button" value="Edit">
			<input type="submit" class="btn btn-danger" value="Batal" onclick="history.back();">	
		</div>
	</div>
</form>

<?php  include "conf_tinymce/txt_editor.php" ?>
