<?php

	include "koneksi.php";
	$ID = $_GET['id'];
	
	$nama_pekerja = $_POST["nama"];
	$umur_pekerja = $_POST["umur"];
	$nama_pekerjaan = $_POST["pekerjaan"];
	$alamat_pekerja = $_POST["alamat"];
	
	$query = "UPDATE `datapekerja` SET `nama` = '".$nama_pekerja."', `umur` = '".$umur_pekerja."', `pekerjaan` = '".$nama_pekerjaan."', `alamat` = '".$alamat_pekerja."' WHERE `datapekerja`.`id` = ".$ID.";";
	mysqli_query($conn, $query);
	if ($query){
	$msg = "Data Pekerja Berhasil Diganti";

	}else{
	$msg = "Data Pekerja Gagal Diganti";
	}

  $response = array (
		'Status Data Pekerja' => $msg
  );
  
  echo json_encode($response);
?>