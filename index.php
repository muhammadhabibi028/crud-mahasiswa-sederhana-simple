<?php
include("koneksi.php");
$mahasiswa = mysqli_query($conn,"SELECT * FROM mahasiswa");
?>



<!DOCTYPE html>
<html lang="en">
   <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Comptaible" content="ie=edge">
   <title>Daftar Mahasiswa</title>
   </head>
   <body>
   <h1>Daftar Mahasiswa</h1>
   <table border="1" cellspacing="0" cellpadding="10">
    <tr>
	<th>NO</th>
	<th>NPM</th>
	<th>Nama</th>
	<th>EMAIL</th>
	<th>ALAMAT</th>
	<th>JURUSAN</th>
	<th>FAKULTAS</th>
	<th>AGAMA</th>
	<th>TELEPON</th>
	</tr>
	
	<?php $i = 1;?>
	<?php while ($row = mysqli_fetch_assoc($mahasiswa)):?>
		<tr>
			<td><?= $i; ?></td>
			<td><?= $row["npm"] ?></td>
			<td><?php echo $row ["nama"] ?></td>
			<td><?php echo $row ["email"] ?></td>
			<td><?php echo $row ["alamat"] ?></td>
			<td><?php echo $row ["jurusan"] ?></td>
			<td><?php echo $row ["fakultas"] ?></td>
			<td><?php echo $row ["agama"] ?></td>
			<td><?php echo $row ["telepon"] ?></td>
			<td>
			<a href="edit.php?npm=<?= $row["npm"]?>">Ubah</a>
			<a href="hapus.php?npm=<?= $row["npm"]?>">Hapus</a>
			</td>
			</tr>
			<?php $i++; ?>
			<?php endwhile ?>
	</table>
	<p align="left"> <a href="tambah.php">Tambah Data</a> </p>
</body>
</html>