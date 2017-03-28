<div>
  <h3>Manage Contactus</h3>
</div>
<div>
  <table width="" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email </th>
        <th>Phone</th>
        <th>Keterangan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <?php

      include "../libs/funct/paging.php";
      include "../libs/funct/library_function.php";

      //variable paging mencari posisi batas
      $p= new Paging_contactus;// create new paging
      $batas=5;
      $posisi=$p->cariPosisi($batas);

      $no=1+$posisi;
      $rw=mysqli_query($con,"SELECT * FROM contactus LIMIT $posisi ,$batas");
      while($s=mysqli_fetch_array($rw)) {

    ?>
    <tbody>
    <tr>
      <td width="20"><?php echo $no;?></td>
      <td width="100"><?php echo $s['nama']; ?></td>
      <td width="100"><?php echo $s['email']; ?></td>
      <td width="10"><?php echo $s['phone']; ?></td>
      <td width="100"><?php echo potongKarakter($s['keterangan']); ?></td>
      <td width="100">
          <a href="homeadmin.php?pg=viewcontactus&id=<?php echo $s['id_contactus'];?>"><i></i> View </a>||
          <a href="proses/proses_contactus.php?act=deletecontactus&id=<?php echo $s['id_contactus'];?>"><i></i> Delete </a>
      </td>
    </tr>
    <?php $no++; } ?>
  </table>
</div>

<?php
//=============CUT HERE for paging====================================
  $tampil2 =mysqli_query($con,"select * from contactus");
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
