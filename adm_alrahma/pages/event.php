<?php include "../libs/funct/library_function.php"; ?>

<div>
  <h3>Manage Event</h3>
</div>
<div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Event</th>
        <th>Tanggal Event</th>
        <th>Keterangan Event</th>
        <th>Foto</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <?php

      include "../libs/funct/paging.php";
      //variable paging mencari posisi batas
      $p= new Paging_event;
      $batas=10;
      $posisi=$p->cariPosisi($batas);

      $no=1+$posisi;
      $rw=mysqli_query($con,"SELECT * FROM event LIMIT $posisi, $batas");
      while($s=mysqli_fetch_array($rw)) {
    ?>
    <tbody>
    <tr>
      <td width="20"><?php echo $no; ?></td>
      <td width="100"><?php echo $s['judul_event'];?></td>
      <td width="120"><?php echo tgl_indo($s['tanggal_event']);?></td>
      <td><?php echo strip_tags($s['keterangan_event']);?></td>
      <td width="100"><?php echo $s['foto_event'];?></td>
      <td width="90">
          <a href="homeadmin.php?pg=editevent&id=<?php echo $s['id_event'];?>"><i> </i> Edit </a>||
          <a href="proses/proses_event.php?act=deleteevent&id=<?php echo $s['id_event'];?>"><i></i> Delete </a>
      </td>
    </tr>
    <?php $no++; } ?>
  </table>
</div>
<div>
  <a href="homeadmin.php?pg=addevent" class="btn btn-primary">Add Event</a>
</div>

<?php
//=============CUT HERE for paging====================================
  $tampil2 =mysqli_query($con,"select * from event");
  $jmldata =mysqli_num_rows($tampil2);
  //menampilkan jumlah_datatotal data
  echo " <div class='main-wrapperpagging'>
            <div>Jumlah : <span class='datecolor'>data $jmldata </span></div>
         </div>";
  //menampilkan link halaman ?>
  <div class='main-containernav'>
    <div class='inner-nav-link'>
        <div class='pagination'>
            <ul>
            <?php
                $jmlhalaman   = $p->jumlahHalaman($jmldata, $batas);
                $linkHalaman  = $p->navHalaman($_GET['halaman'], $jmlhalaman);
                echo  $linkHalaman;
            ?>
            </ul>
        </div>
    </div>
  </div>
