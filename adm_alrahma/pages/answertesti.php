<script type="text/javascript">
	$(document).ready(function(){
		$('.adding').click(function(){
			$('.add-answer').slideToggle('slow');
		});
	});
</script>

<?php include "../libs/funct/library_function.php"; ?>

<div>
  <h3>Answer Consultation</h3>
</div>

<?php

	$getdata_user = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM testimoni WHERE id_testimoni='$_GET[id]'"));
	$convrt = $getdata_user['tgl_testi'];
	$substr = substr($convrt, 10);
 ?>
<input type="hidden" name="id_testimoni" value="<?php echo $_GET['id'];?>">
<input type="hidden" name="id_testimoni" value="<?php echo $_SESSION['username'];?>">
<div class="bordered-container">
	<div>
		<div style="float:right;display:inline-block;">
		<span class="">Tanggal: <?php echo tgl_indo($getdata_user['tgl_testi']).$substr;?></span>
		</div>
		<div>
			<label class="label-config">Pertanyaan dari</label>
			<span class="nama_testi">: <?php echo $getdata_user['nama_testi']; ?></span> 
		</div>
		<div>
			<label class="label-config">Email</label> 
			<span class="email">: <?php echo $getdata_user['email'] ;?></span>
		</div>
		<div>
			<label class="label-config">No Telp</label> 
			<span class="notelp">: <?php echo $getdata_user['no_telp_testi'] ;?></span>
		</div>
		<div>
			<label>Keluhan :</label>
			<textarea readonly class="form-textconfig"><?php echo $getdata_user['keluhan_testi']; ?></textarea> 
		</div>
	</div>
</div>
<?php 

	$get_testi = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM analisa_testi WHERE id_testimoni='$_GET[id]'"));
	$showtesti_answer = $get_testi['id_testimoni'];
	$convrt = $get_testi['tgl_answer'];
	$substr_answer = substr($convrt, 10);

 ?>
	<?php if ($showtesti_answer =="" || $showtesti_answer== null) { ?>

	<?php }else{ ?>

	<div class="bordered-container class-admin">
		<div style="float:right;display:inline-block;">
			<span class="">Tanggal: <?php echo tgl_indo($get_testi['tgl_answer']).$substr_answer;?></span>
		</div>
		<div>
			<label>Jawaban dari <?php echo $_SESSION['username']; ?></label>
			<textarea readonly class="form-textconfig"><?php echo $get_testi['answer_testi']; ?></textarea> 
		</div>
	</div>
	<?php } ?>

<div style="margin-bottom:20px;">
	<input type="submit" class="btn btn-primary adding" name="button" id="button" value="Tanggapi">
	<input type="submit" class="btn btn-danger" value="Batal" onclick="history.back();">	
</div>

<!-- Answer Container Slider Down -->
<div style="display:none;" class="add-answer">
	<form action="proses/proses_answertesti.php?act=answertesti&id=<?php echo $_GET['id'];?>&sesi=<?php echo $_SESSION['username'];?>" method="post" enctype="multipart/form-data">
	<div class="bordercontainer-none">
		<div>
			<label class="label-config">Jawaban dari <?php echo $_SESSION['username'];?></label>
		</div>
		<div>
			<label>Solusi :</label>
			<textarea class="form-textconfig" name="answer_testi" required=""></textarea> </div>
		<div style="margin-top:20px;">
			<input type="submit" class="btn btn-primary" name="button" id="button" value="Submit">
		</div>
	</div>
	</form>
</div>
