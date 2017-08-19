<div>
  <h3>Manage Consultation</h3>
</div>
<div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Tgl konsultasi</th>
        <th>Keluhan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <?php
      include "../libs/funct/paging.php";
      include "../libs/funct/library_function.php";
      //variable paging mencari posisi batas
      $p= new Paging_mantestimoni;
      $batas=5;
      $posisi=$p->cariPosisi($batas);

      $no=1+$posisi;
      $getconsul = mysqli_query($con,"SELECT * FROM testimoni ORDER BY id_testimoni DESC LIMIT $posisi, $batas");
      while ($res = mysqli_fetch_array($getconsul)) {
    ?>
    <tbody>
      <tr>
          <th width="50"><?php echo $no;?></td>
          <td><?php echo $res['nama_testi'];?></td>
          <td><?php echo $res['email'];?></td>
          <td width="100"><?php echo tgl_indo($res['tgl_testi']);?></td>
          <td width="50"><?php echo $res['keluhan_testi'];?></br></td>
          <td width="110">
              <a href="homeadmin.php?pg=answertesti&id=<?php echo $res['id_testimoni'];?>"><i></i> Answer</a> ||
              <a href="proses/proses_testi.php?act=deletetesti&id=<?php echo $res['id_testimoni'];?>"><i></i> Delete </a>
          </td>
          <?php $no++; } ?>
      </tr>
    </tbody>
  </table>
</div>
<?php
//=============CUT HERE for paging====================================
  $tampil2 =mysqli_query($con,"select * from testimoni");
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
