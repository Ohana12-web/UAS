<?php
  
include "koneksi.php";

$nama_pekerja = $_POST["nama"];
$umur_pekerja = $_POST["umur"];
$nama_pekerjaan = $_POST["pekerjaan"];
$alamat_pekerja = $_POST["alamat"];

$sql = "INSERT INTO `datapekerja` (`nama`, `umur`, `pekerjaan`, `alamat`) VALUES ('".$nama_pekerja."', '".$umur_pekerja."', '".$nama_pekerjaan."', '".$alamat_pekerja."');";


$query = mysqli_query($conn, $sql);
if ($query){
	$msg = "Penyimpanan data pekerja berhasil";

}else{
	$msg = "Penyimpanan data pekerja gagal";
}

  $response = array (
		'Data Pekerja' => $msg
  );
  
  echo json_encode($response);
?>