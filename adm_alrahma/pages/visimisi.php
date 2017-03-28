<?php 
	$get_query = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM visimisi WHERE id_visimisi ='$_GET[id]'"));
?>
<div>
	<h3>Visi & Misi</h3>
</div>
<form method="post" action="proses/proses_visimisi.php?act=editvisimisi&id=<?php echo $get_query['id_visimisi'];?>" enctype="multipart/form-data">
	<div>
		<div>
			<label>Keterangan</label>
			<textarea id="editor1" name="ket_visimisi" rows="10" cols="80" required="">
				<?php echo $get_query['ket_visimisi'];?>
			</textarea>
		</div>
		<div style="margin-top:20px;">
			<input type="submit" class="btn btn-primary" name="button" id="button" value="Edit">
			<input type="submit" class="btn btn-danger" value="Batal" onclick="history.back();">	
		</div>
	</div>
</form>

<?php  include "conf_tinymce/txt_editor.php" ?>

