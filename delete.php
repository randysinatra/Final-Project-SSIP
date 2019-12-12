<?php 
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM `mahasiswa` WHERE id = $id";

if ($conn->query($query)===TRUE) {
	header("location:index.php");
	echo "Data is successfully deleted.";
	}
else {
	echo "Error: ". $query . "<br>" . mysqli_error($conn);
	}

?>