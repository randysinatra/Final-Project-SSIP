<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
</head>
<body>

	<h2>Data Mahasiswa</h2>
	<br/>
	<a href="index.php">Back</a>
	<br/>
	<br/>
	<h3>Edit Data Mahasiswa</h3>
	
	<?php
	include 'koneksi.php';
	
	$id = $_GET['id'];
	$data = mysqli_query($conn,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method = "post">
		<table>
			<tr>
				<td>NIM</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					<input type="text" name="nim" value="<?php echo $d['NIM']; ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $d['Nama']; ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $d['Email']; ?>"></td>
			</tr>
			<tr>
				<td>No. Telp</td>
				<td><input type="text" name="telp" value="<?php echo $d['Telp']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type = "submit" name = "Save" value = "Save"></td>
			</tr>
		</table>
	</form>
		<?php 
	}
	
	if (isset($_POST['Save'])){
			$id = $_POST['id'];
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$query = "update mahasiswa set NIM='$nim', Nama='$nama', Email='$email', Telp='$telp' where id='$id'";
		
			if ($conn->query($query)===TRUE) {
			    echo " <script> alert('Data Updated');</script>";
                echo "<script type='text/javascript'>document.location.href='index.php';</script>";
			}
			else {
				echo "Error: ". $query . "<br>" . mysqli_error($conn);
			}
		}
	?>

</body>
</html>