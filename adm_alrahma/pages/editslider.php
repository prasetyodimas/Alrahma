<?php 

$editslider = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM slider WHERE id_slider='$_GET[id]'"));
$photo =$base_url."uploads/images/slide/".$editslider['foto_slider'];

?>
<div>
	<h3>Edit Slider</h3>
</div>
<form method="post" action="proses/proses_slider.php?act=editslider&id=<?php echo $editslider['id_slider'];?>" enctype="multipart/form-data">
	<input type="hidden" name="id_slider" value="<?php echo $_GET['id']; ?>">	
	<img src="<?php echo $photo ?>">
	<div>
		<!-- <div style="margin-top:20px;">
			<label>Keterangan</label>
			<textarea name="keterangan_slider" id="editor1" required=""><?php echo strip_tags($editslider['keterangan_slider']);?></textarea>
		</div> -->
		<div style="margin-top:1%;">
			<label>Foto</label>
			<input type="file" name="foto_slider" class="form-control" required="">
		</div>
		<div style="margin-top:20px;">
			<input type="submit" class="btn btn-primary" name="button" id="button" value="Edit">
			<input type="submit" class="btn btn-danger" value="Batal" onclick="history.back();">	
		</div>
	</div>
</form>

<?php  include "conf_tinymce/txt_editor.php" ?>
