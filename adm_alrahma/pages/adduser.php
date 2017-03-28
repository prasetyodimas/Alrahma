<div>
  <h3>Add User</h3>
</div>
<form method="post" action="proses/proses_konfigurasi.php?act=aduser" enctype="multipart/form-data">
  <div>
      <label>Username</label>
  	  <input type="text" name="username" required="">
  </div>
  <div>
      <label>Password</label>
      <input type="text" name="password" required="">
  </div>
  <div>
      <label>Jenis level akses</label>
      <select name="level" required="">
        <option value="">- please select -</option>
        <option value="1">Admin</option>
        <option value="2">Admin Sistem</option>
      </select>
  </div>
  <div style="margin-top:5%;">
    <input type="submit" class="btn btn-primary" name="button" value="Submit">
    <input type="submit" class="btn btn-danger" value="Batal" onclick="history.back();">
  </div>
</form>


