<?php
  
include "koneksi.php";

$sql = "SELECT * FROM datapekerja";
$query = mysqli_query($conn,$sql);
while ($data = mysqli_fetch_array($query)){
	
	$item[] = array (
		'id_pekerja'=>$data["id"],
		'nama_pekerja'=>$data["nama"],
		'umur_pekerja'=>$data["umur"],
		'nama_pekerjaan'=>$data["pekerjaan"],
		'alamat_pekerja'=>$data["alamat"],
	);
  }
  
  $response = array (
		'Data Pekerjaan' => $item	
  );
  
  echo json_encode($response);

?>