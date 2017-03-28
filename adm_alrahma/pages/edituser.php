<?php 

 $getuser =mysqli_fetch_array(mysqli_query($con,"SELECT * FROM hak_akses WHERE id_hak_akses='$_GET[id]'"));

 if ($getuser['level']==0) {
   $status_user = 'Admin Sistem';
 }elseif ($getuser['level']==1) {
   $status_user = 'Pimpinan';
 }

?>


<div>
  <h3>Blokir User</h3>
</div>
<form method="post" action="proses/proses_konfigurasi.php?act=edituser&id=<?php echo $getuser['id_hak_akses'];?>" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
  <div>
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $getuser['username'];?>">
  </div>
  <div style="display:none;">
    <label>Password</label>
  	  <input type="text" name="password" value="<?php echo $getuser['password'];?>" readonly>
  </div>
  <div>
      <label>Jenis level akses</label>
      <select name="level">
        <option value="<?php echo $getuser['level'];?>" readonly><?php echo $status_user;?></option>
        <option value="0">Admin sistem</option>
        <option value="1">Pimpinan</option>
      </select>
  </div>
  <div>
    <label>Blokir User</label>
    <select name="blokir" required="">
      <option value="tidak">Tidak</option>
      <option value="ya">Ya</option>
    </select>
  </div>
  <div style="margin-top:5%;">
    <input type="submit" class="btn btn-primary" name="button" value="Blokir">
    <input type="submit" class="btn btn-danger" value="Batal" onclick="history.back();">
  </div>
</form>


