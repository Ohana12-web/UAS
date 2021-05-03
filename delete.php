<?php
	include_once('koneksi.php');
	$ID = $_GET['id'];
	$query = "DELETE FROM `datapekerja` WHERE `datapekerja`.`id` = ".$ID.";";
	mysqli_query($conn, $query);
	if ($query){
	$msg = "Data Pekerja telah Terhapus";

	}else{
	$msg = "Data Pekerja Gagal Dihapus";
	}

  $response = array (
		'Status Data Pekerja' => $msg
  );
  
  echo json_encode($response);
?>