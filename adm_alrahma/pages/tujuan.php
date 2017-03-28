<?php 
	$get_query = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM tujuan WHERE id_tujuan ='$_GET[id]'"));
?>
<div>
	<h3>Tujuan</h3>
</div>
<form method="post" action="proses/proses_tujuan.php?act=edittujuan&id=<?php echo $get_query['id_tujuan'];?>" enctype="multipart/form-data">
	<div>
		<div>
			<label>Keterangan</label>
			<textarea id="editor1" name="ket_tujuan" rows="10" cols="80" required="">
				<?php echo $get_query['ket_tujuan'];?>
			</textarea>
		</div>
		<div style="margin-top:20px;">
			<input type="submit" class="btn btn-primary" name="button" id="button" value="Edit">
			<input type="submit" class="btn btn-danger" value="Batal" onclick="history.back();">	
		</div>
	</div>
</form>

<?php  include "conf_tinymce/txt_editor.php" ?>

