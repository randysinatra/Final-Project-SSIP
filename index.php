<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan Data dari Database</title>
</head>
<body>

	<h2>Data Mahasiswa</h2>
	<br/>
	<a href="insert.php">+ add new data</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Email</th>
			<th>No. Telp.</th>
			<th>Option</th>
		</tr>
		
		<?php 
		include 'koneksi.php';
		$no = 1;
		
		$query = "SELECT * from mahasiswa";
		$data = mysqli_query($conn, $query);
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['NIM']; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['Email']; ?></td>
				<td><?php echo $d['Telp']; ?></td>
				<td>
					<a href="update.php?id=<?php echo $d['id']; ?>">UPDATE</a>
					<a href="delete.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">DELETE</a>
				</td>
			</tr>
			<?php 
		}
		?>
		
	</table>
</body>
</html>