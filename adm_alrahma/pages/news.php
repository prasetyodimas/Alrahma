<?php include "../libs/funct/library_function.php"; ?>

<div>
  <h3>Manage News</h3>
</div>
<div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul Berita</th>
        <th>Tanggal Posting</th>
        <th>Keterangan</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <?php

      include "../libs/funct/paging.php";

      //variable paging mencari posisi batas
      $p= new Paging_news;
      $batas=5;
      $posisi=$p->cariPosisi($batas);

      //JUMLAH DATA DITAMBAH PERHALAMAN
      $no=1+$posisi;
      $rw=mysqli_query($con,"SELECT * FROM berita ORDER BY id_berita DESC LIMIT $posisi, $batas");
      while($s=mysqli_fetch_array($rw)) {
      //convert string text LengthException
      $text = $s['ket_berita'];
      $convert_text = substr($text, 0, 400);
    ?>
    <tbody>
    <tr>
      <td width="40"><?php echo $no; ?></td>
      <td width="100"><?php echo $s['judul_berita']; ?></td>
      <td width="120"><?php echo tgl_indo($s['tanggal_berita']);?></td>
      <td><?php echo $convert_text; ?></td>
      <td width="100"><?php echo $s['status_news']; ?></td>
      <td width="100">
          <a href="homeadmin.php?pg=editnews&id=<?php echo $s['id_berita']; ?>"> Edit </a>||
          <a href="proses/proses_news.php?act=deletenews&id=<?php echo $s['id_berita']?>"> Delete </a>
      </td>
    <?php $no++;} ?>
    </tr>
  </table>
</div>
<div style="display:inlne-block;">
  <a href="homeadmin.php?pg=addnews" class="btn btn-primary">Add News</a>
</div>

<?php
//=============CUT HERE for paging====================================
  $tampil2 =mysqli_query($con,"select * from berita");
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
