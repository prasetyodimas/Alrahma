<?php include "../../config/config.php";

//file cek.php untuk cek data
$last = $_GET['last'];
$sql = "select * from testimoni where id_testimoni='$last'";
$rs = mysqli_query($con,$sql);

//output berupa json
if(mysqli_num_rows($rs) > 0){
	$lastSql = "select max(id) from testimoni";
	$lastId = mysqli_fetch_array(mysqli_query($con,$lastSql));
	echo '{"result":"new data","last":"'.$lastId[0].'"}';
}else{
	echo '{"result":false}';
}