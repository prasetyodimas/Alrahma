<?php 

$career = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM career WHERE id_career='$_GET[id]'"));
$photo  = $base_url."uploads/images/career/".$career['foto'];

?>
<div>
	<h3>Edit Career</h3>
</div>
<form method="post" action="proses/proses_career.php?act=editcareer&id=<?php echo $career['id_career'];?>" enctype="multipart/form-data">
	<input type="hidden" name="id_career" value="<?php echo $_GET['id']; ?>">
		<div style="margin-bottom:3%;">
			<label>Judul Career</label>
			<input type="text" name="judul_career" value="<?php echo $career['judul_career'];?>"class="form-control" style="width:400px;">
		<div>
			<label>Kualifikasi</label>
			<textarea id="editor1" name="ket_career" rows="10" cols="80" required><?php echo $career['ket_career']; ?></textarea>
		</div>
		<div style="margin-top:3%;">
			<img src="<?php echo $photo; ?>" class="sizing-img">
			<label>Foto / Lampiran Career *diisi jika ingin mengubah gambar</label>
			<input type="file" name="foto" class="form-control">
		</div>
		<div style="margin-top:20px;">
			<input type="submit" class="btn btn-primary" name="button" id="button" value="Edit">
			<input type="submit" class="btn btn-danger" value="Batal" onclick="history.back();">	
		</div>
</form>

<?php  include "conf_tinymce/txt_editor.php" ?>
