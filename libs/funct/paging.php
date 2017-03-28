<?php
// PAGING NEWS USER
class Paging_news_user {

	function cariPosisi($batas) {
		if (empty($_GET['halaman'])) {
			$posisi=0;
			$_GET['halaman']=1;
		}else{
			$posisi = ($_GET['halaman']-1) *$batas;
		}
		return $posisi;
	}
	// fungsi untuk menghitung total halaman

	function jumlahHalaman($jmldata, $batas){

		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 ... Next, Prev, First, Last
	function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";
		// Link First dan Previous
		if ($halaman_aktif > 1){
			$link_halaman .= "
			<li><a href=$_SERVER[PHP_SELF]?pg=news&a=$_GET[a]&halaman=1 style='font-size:11px;'><< First</a></li>";
		}
		if (($halaman_aktif-1) > 0) {
			$previous = $halaman_aktif-1;
			$link_halaman .= "
			<li><a href=$_SERVER[PHP_SELF]?pg=news&a=$_GET[a]&halaman=$previous style='font-size:11px;'>< Previous</a></li>";
		}

		// Link halaman 1,2,3, ...
		for ($i=1; $i<=$jmlhalaman; $i++){
			if ($i == $halaman_aktif){
				$link_halaman .= "
				<li><a>$i</a></li> ";
			}else{
				$link_halaman .= "
				<li><a href=$_SERVER[PHP_SELF]?pg=news&a=$_GET[a]&halaman=$i>$i</a></li>";
			}
				$link_halaman .= "";
		}

		// Link Next dan Last
		if ($halaman_aktif < $jmlhalaman){
			$next=$halaman_aktif+1;
			$link_halaman .= "
			<li><a href=$_SERVER[PHP_SELF]?pg=news&a=$_GET[a]&halaman=$next style='font-size:11px;'>Next ></a></li>";
		}
		if (($halaman_aktif != $jmlhalaman) && ($jmlhalaman != 0)){
			$link_halaman .= "
			<li><a href=$_SERVER[PHP_SELF]?pg=news&a=$_GET[a]&halaman=$jmlhalaman style='font-size:11px;'>Last >></a></li>";
		}
		return $link_halaman;
	}
}


// PAGING CAREER
class Paging_career {
	// Fungsi untuk mencek halaman dan posisi data
	function cariPosisi($batas) {
		if(empty($_GET['halaman'])){
				$posisi=0;
				$_GET['halaman']=1;
		}else{
				$posisi = ($_GET['halaman']-1) * $batas;
		}
		return $posisi;
	}

	// Fungsi untuk menghitung total halaman
	function jumlahHalaman($jmldata, $batas) {

			$jmlhalaman = ceil($jmldata/$batas);
			return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 ... Next, Prev, First, Last
	function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";
		// Link First dan Previous
		if ($halaman_aktif > 1){
				$link_halaman .= "<li><a href=homeadmin.php?pg=career&a=$_GET[a]&halaman=1 style='font-size:11px;'><< First</a></li>";
		}
		if (($halaman_aktif-1) > 0) {
				$previous = $halaman_aktif-1;
				$link_halaman .= "<li><a href=homeadmin.php?pg=career&a=$_GET[a]&halaman=$previous style='font-size:11px;'>< Previous</a></li>";
		}

		// Link halaman 1,2,3, ...
		for ($i=1; $i<=$jmlhalaman; $i++){
			if ($i == $halaman_aktif){
					$link_halaman .= "<li><a>$i</a></li> ";
			}else{
					$link_halaman .= "<li><a href=homeadmin.php?pg=career&a=$_GET[a]&halaman=$i>$i</a></li>";
			}
					$link_halaman .= "";
		}

		// Link Next dan Last
		if ($halaman_aktif < $jmlhalaman){
				$next=$halaman_aktif+1;
				$link_halaman .= "<li><a href=homeadmin.php?pg=career&a=$_GET[a]&halaman=$next style='font-size:11px;'>Next ></a></li>";
		}
		if (($halaman_aktif != $jmlhalaman) && ($jmlhalaman != 0)){
				$link_halaman .= "<li><a href=homeadmin.php?pg=career&a=$_GET[a]&halaman=$jmlhalaman style='font-size:11px;'>Last >></a></li>";
		}
		return $link_halaman;
	}
}

// PAGING NEWS ADMIN
class Paging_news {
	// Fungsi untuk mencek halaman dan posisi data
	function cariPosisi($batas) {
			if(empty($_GET['halaman'])){
					$posisi=0;
					$_GET['halaman']=1;
			}else{
					$posisi = ($_GET['halaman']-1) * $batas;
			}
			return $posisi;
	}

	// Fungsi untuk menghitung total halaman
	function jumlahHalaman($jmldata, $batas ,$no) {
			$jmlhalaman = ceil($jmldata/$batas+$no);
			return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 ... Next, Prev, First, Last
	function navHalaman($halaman_aktif, $jmlhalaman){
			$link_halaman = "";
			// Link First dan Previous
			if ($halaman_aktif > 1){
					$link_halaman .="<li><a href=homeadmin.php?pg=news&a=$_GET[a]&halaman=1 style='font-size:11px;'><< First</a></li>";
			}
			if (($halaman_aktif-1) > 0) {
					$previous = $halaman_aktif-1;
					$link_halaman .= "<li><a href=homeadmin.php?pg=news&a=$_GET[a]&halaman=$previous style='font-size:11px;'>< Previous</a></li>";
			}

		// Link halaman 1,2,3, ...
		for ($i=1; $i<=$jmlhalaman; $i++){
				if ($i == $halaman_aktif){
						$link_halaman .= "<li><a>$i</a></li> ";
				}else{
						$link_halaman .= "<li><a href=homeadmin.php?pg=news&a=$_GET[a]&halaman=$i>$i</a></li>";
				}
						$link_halaman .= "";
		}

		// Link Next dan Last
		if ($halaman_aktif < $jmlhalaman){
				$next=$halaman_aktif+1;
				$link_halaman .= "<li><a href=homeadmin.php?pg=news&a=$_GET[a]&halaman=$next style='font-size:11px;'>Next ></a></li>";
		}
		if (($halaman_aktif != $jmlhalaman) && ($jmlhalaman != 0)){
				$link_halaman .= "<li><a href=homeadmin.php?pg=news&a=$_GET[a]&halaman=$jmlhalaman style='font-size:11px;'>Last >></a></li>";
		}
		return $link_halaman;
	}
}


// PAGING SLIDER
class Paging_slider {
	// Fungsi untuk mencek halaman dan posisi data
	function cariPosisi($batas) {
		if(empty($_GET['halaman'])){
			$posisi=0;
			$_GET['halaman']=1;
		}else{
			$posisi = ($_GET['halaman']-1) * $batas;
		}
		return $posisi;
	}

	// Fungsi untuk menghitung total halaman
	function jumlahHalaman($jmldata, $batas) {

		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 ... Next, Prev, First, Last
	function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";
		// Link First dan Previous
		if ($halaman_aktif > 1){
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=news&a=$_GET[a]&halaman=1 style='font-size:11px;'><< First</a></li>";
		}
		if (($halaman_aktif-1) > 0) {
			$previous = $halaman_aktif-1;
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=news&a=$_GET[a]&halaman=$previous style='font-size:11px;'>< Previous</a></li>";
		}

		// Link halaman 1,2,3, ...
		for ($i=1; $i<=$jmlhalaman; $i++){
			if ($i == $halaman_aktif){
				$link_halaman .= "
				<li><a>$i</a></li> ";
			}else{
				$link_halaman .= "
				<li><a href=homeadmin.php?pg=news&a=$_GET[a]&halaman=$i>$i</a></li>";
			}
				$link_halaman .= "";
		}

		// Link Next dan Last
		if ($halaman_aktif < $jmlhalaman){
			$next=$halaman_aktif+1;
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=news&a=$_GET[a]&halaman=$next style='font-size:11px;'>Next ></a></li>";
		}
		if (($halaman_aktif != $jmlhalaman) && ($jmlhalaman != 0)){
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=news&a=$_GET[a]&halaman=$jmlhalaman style='font-size:11px;'>Last >></a></li>";
		}
		return $link_halaman;
	}
}


// PAGING SLIDER
class Paging_event {
	// Fungsi untuk mencek halaman dan posisi data
	function cariPosisi($batas) {
		if(empty($_GET['halaman'])){
			$posisi=0;
			$_GET['halaman']=1;
		}else{
			$posisi = ($_GET['halaman']-1) * $batas;
		}
		return $posisi;
	}

	// Fungsi untuk menghitung total halaman
	function jumlahHalaman($jmldata, $batas) {

		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 ... Next, Prev, First, Last
	function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";
		// Link First dan Previous
		if ($halaman_aktif > 1){
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=event&a=$_GET[a]&halaman=1 style='font-size:11px;'><< First</a></li>";
		}
		if (($halaman_aktif-1) > 0) {
			$previous = $halaman_aktif-1;
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=event&a=$_GET[a]&halaman=$previous style='font-size:11px;'>< Previous</a></li>";
		}

		// Link halaman 1,2,3, ...
		for ($i=1; $i<=$jmlhalaman; $i++){
			if ($i == $halaman_aktif){
				$link_halaman .= "
				<li><a>$i</a></li> ";
			}else{
				$link_halaman .= "
				<li><a href=homeadmin.php?pg=event&a=$_GET[a]&halaman=$i>$i</a></li>";
			}
				$link_halaman .= "";
		}

		// Link Next dan Last
		if ($halaman_aktif < $jmlhalaman){
			$next=$halaman_aktif+1;
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=event&a=$_GET[a]&halaman=$next style='font-size:11px;'>Next ></a></li>";
		}
		if (($halaman_aktif != $jmlhalaman) && ($jmlhalaman != 0)){
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=event&a=$_GET[a]&halaman=$jmlhalaman style='font-size:11px;'>Last >></a></li>";
		}
		return $link_halaman;
	}
}


// PAGING GALLERY
class Paging_gallery {
	// Fungsi untuk mencek halaman dan posisi data
	function cariPosisi($batas) {
		if(empty($_GET['halaman'])){
			$posisi=0;
			$_GET['halaman']=1;
		}else{
			$posisi = ($_GET['halaman']-1) * $batas;
		}
		return $posisi;
	}

	// Fungsi untuk menghitung total halaman
	function jumlahHalaman($jmldata, $batas) {

		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 ... Next, Prev, First, Last
	function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";
		// Link First dan Previous
		if ($halaman_aktif > 1){
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=gallery&a=$_GET[a]&halaman=1 style='font-size:11px;'><< First</a></li>";
		}
		if (($halaman_aktif-1) > 0) {
			$previous = $halaman_aktif-1;
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=gallery&a=$_GET[a]&halaman=$previous style='font-size:11px;'>< Previous</a></li>";
		}

		// Link halaman 1,2,3, ...
		for ($i=1; $i<=$jmlhalaman; $i++){
			if ($i == $halaman_aktif){
				$link_halaman .= "
				<li><a>$i</a></li> ";
			}else{
				$link_halaman .= "
				<li><a href=homeadmin.php?pg=gallery&a=$_GET[a]&halaman=$i>$i</a></li>";
			}
				$link_halaman .= "";
		}

		// Link Next dan Last
		if ($halaman_aktif < $jmlhalaman){
			$next=$halaman_aktif+1;
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=gallery&a=$_GET[a]&halaman=$next style='font-size:11px;'>Next ></a></li>";
		}
		if (($halaman_aktif != $jmlhalaman) && ($jmlhalaman != 0)){
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=gallery&a=$_GET[a]&halaman=$jmlhalaman style='font-size:11px;'>Last >></a></li>";
		}
		return $link_halaman;
	}
}


// PAGING TESTIMONI
class Paging_mantestimoni {
	// Fungsi untuk mencek halaman dan posisi data
	function cariPosisi($batas) {
		if(empty($_GET['halaman'])){
			$posisi=0;
			$_GET['halaman']=1;
		}else{
			$posisi = ($_GET['halaman']-1) * $batas;
		}
		return $posisi;
	}

	// Fungsi untuk menghitung total halaman
	function jumlahHalaman($jmldata, $batas) {

		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 ... Next, Prev, First, Last
	function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";
		// Link First dan Previous
		if ($halaman_aktif > 1){
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=mantestimoni&a=$_GET[a]&halaman=1 style='font-size:11px;'><< First</a></li>";
		}
		if (($halaman_aktif-1) > 0) {
			$previous = $halaman_aktif-1;
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=mantestimoni&a=$_GET[a]&halaman=$previous style='font-size:11px;'>< Previous</a></li>";
		}

		// Link halaman 1,2,3, ...
		for ($i=1; $i<=$jmlhalaman; $i++){
			if ($i == $halaman_aktif){
				$link_halaman .= "
				<li><a>$i</a></li> ";
			}else{
				$link_halaman .= "
				<li><a href=homeadmin.php?pg=mantestimoni&a=$_GET[a]&halaman=$i>$i</a></li>";
			}
				$link_halaman .= "";
		}

		// Link Next dan Last
		if ($halaman_aktif < $jmlhalaman){
			$next=$halaman_aktif+1;
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=mantestimoni&a=$_GET[a]&halaman=$next style='font-size:11px;'>Next ></a></li>";
		}
		if (($halaman_aktif != $jmlhalaman) && ($jmlhalaman != 0)){
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=mantestimoni&a=$_GET[a]&halaman=$jmlhalaman style='font-size:11px;'>Last >></a></li>";
		}
		return $link_halaman;
	}
}


// PAGING CONTACT US
class Paging_contactus {
	// Fungsi untuk mencek halaman dan posisi data
	function cariPosisi($batas) {
		if(empty($_GET['halaman'])){
			$posisi=0;
			$_GET['halaman']=1;
		}else{
			$posisi = ($_GET['halaman']-1) * $batas;
		}
		return $posisi;
	}

	// Fungsi untuk menghitung total halaman
	function jumlahHalaman($jmldata, $batas) {

		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 ... Next, Prev, First, Last
	function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";
		// Link First dan Previous
		if ($halaman_aktif > 1){
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=contactus&a=$_GET[a]&halaman=1 style='font-size:11px;'><< First</a></li>";
		}
		if (($halaman_aktif-1) > 0) {
			$previous = $halaman_aktif-1;
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=contactus&a=$_GET[a]&halaman=$previous style='font-size:11px;'>< Previous</a></li>";
		}

		// Link halaman 1,2,3, ...
		for ($i=1; $i<=$jmlhalaman; $i++){
			if ($i == $halaman_aktif){
				$link_halaman .= "
				<li><a>$i</a></li> ";
			}else{
				$link_halaman .= "
				<li><a href=homeadmin.php?pg=contactus&a=$_GET[a]&halaman=$i>$i</a></li>";
			}
				$link_halaman .= "";
		}

		// Link Next dan Last
		if ($halaman_aktif < $jmlhalaman){
			$next=$halaman_aktif+1;
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=contactus&a=$_GET[a]&halaman=$next style='font-size:11px;'>Next ></a></li>";
		}
		if (($halaman_aktif != $jmlhalaman) && ($jmlhalaman != 0)){
			$link_halaman .= "
			<li><a href=homeadmin.php?pg=contactus&a=$_GET[a]&halaman=$jmlhalaman style='font-size:11px;'>Last >></a></li>";
		}
		return $link_halaman;
	}
}



// PAGING TESTIMONI USER
class Paging_testiuser {
	// Fungsi untuk mencek halaman dan posisi data
	function cariPosisi($batas) {
		if(empty($_GET['halaman'])){
			$posisi=0;
			$_GET['halaman']=1;
		}else{
			$posisi = ($_GET['halaman']-1) * $batas;
		}
		return $posisi;
	}

	// Fungsi untuk menghitung total halaman
	function jumlahHalaman($jmldata, $batas) {

		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 ... Next, Prev, First, Last
	function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";
		// Link First dan Previous
		if ($halaman_aktif > 1){
			$link_halaman .= "
			<li><a href=$_SERVER[PHP_SELF]?pg=consultasi&hal=$_GET[a]&halaman=1 style='font-size:11px;'><< First</a></li>";
		}
		if (($halaman_aktif-1) > 0) {
			$previous = $halaman_aktif-1;
			$link_halaman .= "
			<li><a href=$_SERVER[PHP_SELF]?pg=consultasi&hal=$_GET[a]&halaman=$previous style='font-size:11px;'>< Previous</a></li>";
		}

		// Link halaman 1,2,3, ...
		for ($i=1; $i<=$jmlhalaman; $i++){
			if ($i == $halaman_aktif){
				$link_halaman .= "
				<li><a>$i</a></li> ";
			}else{
				$link_halaman .= "
				<li><a href=$_SERVER[PHP_SELF]?pg=consultasi&hal=$_GET[a]&halaman=$i>$i</a></li>";
			}
				$link_halaman .= "";
		}

		// Link Next dan Last
		if ($halaman_aktif < $jmlhalaman){
			$next=$halaman_aktif+1;
			$link_halaman .= "
			<li><a href=$_SERVER[PHP_SELF]?pg=consultasi&hal=$_GET[a]&halaman=$next style='font-size:11px;'>Next ></a></li>";
		}
		if (($halaman_aktif != $jmlhalaman) && ($jmlhalaman != 0)){
			$link_halaman .= "
			<li><a href=$_SERVER[PHP_SELF]?pg=consultasi&hal=$_GET[a]&halaman=$jmlhalaman style='font-size:11px;'>Last >></a></li>";
		}
		return $link_halaman;
	}
}


// PAGING CAREER USER
class Paging_careeruser {
	// Fungsi untuk mencek halaman dan posisi data
	function cariPosisi($batas) {
		if(empty($_GET['halaman'])){
			$posisi=0;
			$_GET['halaman']=1;
		}else{
			$posisi = ($_GET['halaman']-1) * $batas;
		}
		return $posisi;
	}

	// Fungsi untuk menghitung total halaman
	function jumlahHalaman($jmldata, $batas) {

		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 ... Next, Prev, First, Last
	function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";
		// Link First dan Previous
		if ($halaman_aktif > 1){
			$link_halaman .= "
			<li><a href=index.php?pg=career&a=$_GET[a]&halaman=1 style='font-size:11px;'><< First</a></li>";
		}
		if (($halaman_aktif-1) > 0) {
			$previous = $halaman_aktif-1;
			$link_halaman .= "
			<li><a href=index.php?pg=career&a=$_GET[a]&halaman=$previous style='font-size:11px;'>< Previous</a></li>";
		}

		// Link halaman 1,2,3, ...
		for ($i=1; $i<=$jmlhalaman; $i++){
			if ($i == $halaman_aktif){
				$link_halaman .= "
				<li><a>$i</a></li> ";
			}else{
				$link_halaman .= "
				<li><a href=index.php?pg=career&a=$_GET[a]&halaman=$i>$i</a></li>";
			}
				$link_halaman .= "";
		}

		// Link Next dan Last
		if ($halaman_aktif < $jmlhalaman){
			$next=$halaman_aktif+1;
			$link_halaman .= "
			<li><a href=index.php?pg=career&a=$_GET[a]&halaman=$next style='font-size:11px;'>Next ></a></li>";
		}
		if (($halaman_aktif != $jmlhalaman) && ($jmlhalaman != 0)){
			$link_halaman .= "
			<li><a href=index.php?pg=career&a=$_GET[a]&halaman=$jmlhalaman style='font-size:11px;'>Last >></a></li>";
		}
		return $link_halaman;
	}
}




?>
