<?php session_start(); ?>

<script type="text/javascript">
	$(document).ready(function(){
		$('#validate-consultation').validate({
			rules:{
				nama_testi:{
						required:true,
				},
				email:{
						required:true,
						email:true,
				},
				no_telp_testi:{
						required :true,
						number:true,
				},
				keluhan_testi:{
						required:true
				}
			},
			messages:{
				nama_testi :"Nama anda tidak boleh kosong !!",
				email:{
						required:'Email anda tidak boleh kosong !!',
						email:'Email anda tidak valid !!',
				},
				no_telp_testi:{
						required:"Nomor telepon anda tidak boleh kosong !!",
						number:"Nomor telepon anda tidak valid harus angka !!",
				},
				keluhan_testi:"Pesan / keluhan anda tidak boleh kosong !!",
			}

		});
	});
</script>

<section class="container">
<div class="wrapper-outerspaces">
<div>
	<ul class="nav-ul-breadcumb">
		<li class="nav-li-breadcumb"><i class="fa fa-home"></i> Home >> Konsultasi</li>
	</ul>
</div>

<?php include "libs/funct/library_function.php"; ?>

	<h3>KONSULTASI</h3>
	<h5 style="line-height:20px;">
		Terimakasih telah mengunjungi website resmi Al- Rahma Preschool, jika ada yang bisa kami bantu kami dapat menyarankan anda pada sebuah
		layanan konsultasi anak, seputar perkembangan anak, kami sepenuhnya mencoba untuk membantu anda dalam menemukan sebuah solusi terhadap masalah yang
		sering dialami ketika anak sudah beranjak kesekolah.
	</h5>

	<div class="main-headingconsul">
		<h4 style="font-weight:bold;line-height: 27px;"><i class="fa fa-file-text" aria-hidden="true"></i> FORM KONSULTASI</h4>
	</div>
	<div class="main-rightconsultasi">
		<img src="<?php echo $base_url; ?>img/woman-doctor.png">
	</div>
	<section class="form-konsultasi">
		<form action="pages/proses/proses_testi.php?act=addconsultasi" method="post" id="validate-consultation" enctype="multipart/form-data">
			<div>
				<div>
					<label>Nama<span class='required'>*</span></label>
					<input type="text" name="nama_testi" class="form-control" autofocus required="" autocomplete="off">
				</div>
				<div>
					<label>Email<span class='required'>*</span></label>
					<input type="text" name="email" class="form-control" autofocus required="" autocomplete="off">
				</div>
				<div>
					<label>No telp<span class='required'>*</span></label>
					<input type="text" name="no_telp_testi" class="form-control" autofocus required="" autocomplete="off">
				</div>
				<div>
					<label>Keluhan<span class='required'>*</span></label>
					<textarea name="keluhan_testi" cols="20" class="form-control" rows="10" autofocus required="" autocomplete="off"></textarea>
				</div>
				 <div class="form-group">
		 			 <!-- captcha configuration data site-key isi dengan site key anda -->
		     		 <div class="g-recaptcha" data-sitekey="6LfsgCcTAAAAAOaVp5SSLt5aM-XTpnplfeHi9l0w"></div>
	 			</div>
				<div>
					<article>
						Keterangan : <span class='required'>*</span> Formulir tidak boleh kosong !! atau tidak diisi !!
					</article>
				</div>
				<div style="margin-top:20px;">
					<input type="submit" class="btn btn-danger" value="Konsultasi Sekarang">
				</div>
			</div>
		</form>
	</section>
</div>
</section>
