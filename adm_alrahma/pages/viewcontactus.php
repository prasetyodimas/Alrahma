<?php 

$contact = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM contactus WHERE id_contactus='$_GET[id]'"));

?>
<div>
	<h3>View Contactus</h3>
</div>
<div style="margin-bottom:3%;">
		<label>Nama</label>
		<input type="text" name="nama" value="<?php echo $contact['nama'];?>"class="form-control" style="width:400px;">
	<div>
	<div style="margin-bottom:3%;">
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $contact['email'];?>"class="form-control" style="width:400px;">
	<div>
	<div style="margin-bottom:3%;">
		<label>Phone</label>
		<input type="text" name="phone" value="<?php echo $contact['phone'];?>"class="form-control" style="width:400px;">
	<div>
		<label>Kualifikasi</label>
		<textarea id="editor1" name="keterangan" rows="10" cols="80" required><?php echo $contact['keterangan']; ?></textarea>
	</div>
	<div style="margin-top:20px;">
		<input type="submit" class="btn btn-danger" value="Back" onclick="history.back();">	
	</div>

<?php  include "conf_tinymce/txt_editor.php" ?>
