<div>
  <h3>Manage Slider</h3>
</div>
<div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Foto</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <?php

      include "../libs/funct/paging.php";
      //variable paging mencari posisi batas
      $p= new Paging_slider;
      $batas=5;
      $posisi=$p->cariPosisi($batas);

      $no=1+$posisi;
      $rw=mysqli_query($con,"SELECT * FROM slider LIMIT $posisi, $batas");
      while($s=mysqli_fetch_array($rw)) {
    ?>
    <tbody>
    <tr>
      <td><?php echo $no;?></td>
      <td><?php echo $s['foto_slider']; ?></td>
      <td width="100">
          <a href="homeadmin.php?pg=editslider&id=<?php echo $s['id_slider'];?>"><i> </i> Edit </a>||
          <a href="proses/proses_slider.php?act=hapusslider&id=<?php echo $s['id_slider'];?>"><i></i> Delete </a>
      </td>
    </tr>
    <?php $no++; } ?>
  </table>
</div>
<div style="display:inlne-block;">
  <a href="homeadmin.php?pg=addslider" class="btn btn-primary">Add Slider</a>
</div>
<?php

  $tampil2 =mysqli_query($con,"select * from slider");
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
