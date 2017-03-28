<?php 
$nama     = isset($_POST['nama']) ? trim(htmlentities($_POST['nama'])):'';
$komentar = isset($_POST['komentar']) ? trim(htmlentities($_POST['komentar'])):'';

/* untuk menampung variabel post dari captcha google adalah g-recaptcha-reponse */
$captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response']:'';

/*Site key paudtkdsd.com
Use this in the HTML code your site serves to users.
6LfsgCcTAAAAAOaVp5SSLt5aM-XTpnplfeHi9l0w

Secret key paudtksd.com
Use this for communication between your site and Google. Be sure to keep it a secret.
6LfsgCcTAAAAAFRvSHjsiV2AE_-jWrh8GKLLJX2k*/

//masukkan secret key-nya berdasarkan secret key masig-masing saat create api key nya
$secret_key = '6LfsgCcTAAAAAFRvSHjsiV2AE_-jWrh8GKLLJX2k'; 

$error = 'Gagal kirim form: periksa nama, komentar dan captcha nya';

if ($captcha != '' && $nama != '' && $komentar != '') {
   $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secret_key) . '&response=' . $captcha;   
   $recaptcha = file_get_contents($url);
   $recaptcha = json_decode($recaptcha, true);
     if (!$recaptcha['success']) {
      echo "<script language='javascript'>
               alert ('Maaf captcha anda tidak boleh kosong !!')
               top.location='index.php';               
               </script>";
     } else {
      echo "<script language='javascript'>
               alert ('Selamat $_POST[nama] Komentar Anda Berhasil')
               top.location='index.php';               
               </script>";
      // mysql_query("INSERT INTO komen set nama='$nama',komentar='$komentar'") or die (mysql_error());
      // header("location: index.php");
        // echo 'Nama Anda : '.$nama.'<br>Komentar Anda : '.$komentar;
     }
     
}else{
  echo "<script language='javascript'>
             alert ('Mbok ya di isi dulu captcha nya bos')
             top.location='index.php';               
             </script>";
      
}