<div>
  <h3>Manage Career</h3>
</div>
<div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul Career</th>
        <th>Keterangan</th>
        <th>Foto / Lampiran</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <?php

    include "../libs/funct/paging.php";

    //variable paging mencari posisi batas
    $p= new Paging_career;
    $batas=5;
    $posisi=$p->cariPosisi($batas);

    $no=1+$posisi;
    $rw=mysqli_query($con,"SELECT * FROM career LIMIT $posisi, $batas");
    while($s=mysqli_fetch_array($rw)) {
    $photo=$base_url."uploads/images/".$s['featurephoto'];
    //convert string text LengthException
    $text = $s['ket_career'];
    $convert_text = substr($text, 0, 200);

    ?>
    <tbody>
    <tr>
      <td width="50"><?php echo $no;?></td>
      <td width="100"><?php echo $s['judul_career']; ?></td>
      <td><?php echo $convert_text;?></td>
      <td><?php echo $s['foto']; ?></td>
      <td width="100">
          <a href="homeadmin.php?pg=editcareer&id=<?php echo $s['id_career'];?>"><i> </i> Edit </a>||
          <a href="proses/proses_career.php?act=deletecareer&id=<?php echo $s['id_career'];?>"><i></i> Delete </a>
      </td>
    </tr>
    <?php $no++; } ?>
  </table>
</div>
<div style="display:inlne-block;">
  <a href="homeadmin.php?pg=addcareer" class="btn btn-primary">Add Career</a>
</div>

<?php
//=============CUT HERE for paging====================================
  $tampil2 =mysqli_query($con,"select * from career");
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
