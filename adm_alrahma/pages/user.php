<div>
  <h3>Manage User</h3>
</div>
<div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Username</th>
        <th>Level</th>
        <th>Blokir</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <?php
      $no=1;
      $rw=mysqli_query($con,"SELECT * FROM hak_akses");
      while($s=mysqli_fetch_array($rw)) {

       if ($s['level']==0) {
         $status_user = 'Admin Sistem';
       }elseif ($s['level']==1) {
         $status_user = 'Pimpinan';
       }
    ?>
    <tbody>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $s['username']; ?></td>
      <td><?php echo $status_user; ?></td>
      <td><?php echo $s['blokir']; ?></td>
      <td>
          <a href="homeadmin.php?pg=edituser&id=<?php echo $s['id_hak_akses'];?>"><i> </i> Blokir </a>||
          <a href="proses/proses_konfigurasi.php?act=deleteuser&id=<?php echo $s['id_hak_akses']; ?>"><i></i> Delete </a>
      </td>
    </tr>
    <?php $no++; } ?>
  </table>
</div>
<div>
  <a href="homeadmin.php?pg=adduser" class="btn btn-primary">Add User</a>
</div>



