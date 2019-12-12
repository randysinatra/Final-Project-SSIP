<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
</head>
<body>

	<h2>Data Mahasiswa</h2>
	<br/>
	<a href="index.php">Back</a>
	<br/>
	<br/>
	<h3>Add New Data</h3>
	
	<form method = "post">
		<table>
			<tr>
				<td>NIM</td>
				<td><input type ="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type = "text" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type = "text" name="email"></td>
			</tr>
			<tr>
				<td>No. Telp</td>
				<td><input type = "text" name="telp"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type = "submit" name = "Submit" value = "Submit"></td>
			</tr>
		</table>
	</form>
		
		<?php 
		include 'koneksi.php';		
	
		if (isset($_POST['Submit'])){
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$query = "INSERT INTO mahasiswa  (NIM, Nama, Email, Telp) VALUES ('$nim','$nama', '$email', '$telp')";
		
			if ($conn->query($query)===TRUE) {
			    echo " <script> alert('New data created successfully ');</script>";
                echo "<script type='text/javascript'>document.location.href='index.php';</script>";
			}
			else {
				echo "Error: ". $query . "<br>" . mysqli_error($conn);
			}
		}
		
		?>
		
</body>
</html>