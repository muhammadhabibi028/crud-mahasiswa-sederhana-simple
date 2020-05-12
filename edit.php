<?php
require "koneksi.php";
$npm = $_GET['npm'];
$query = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE npm='$npm'");
$result = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Comptaible" content="ie=edge">
    <title>Ubah data mahasiswa</title>
<head>	
<body>
		<h1>ubah data mahasiswa</h1>
		<form action="update.php" method="post" name="form1">
		<table>
		<tr>
			<td>npm</td>
			<td><input type="text" name="npm" method="post" size="20" required="" value="<?= $result['npm']?>"></td>
			</tr>
		<tr>
			<td>nama</td>
			<td><input type="text" name="nama" method="post" size="30" required="" value="<?= $result['nama']?>"></td>
			</tr>
		<tr>
			<td>email</td>
			<td><input type="email" name="email" method="post" size="20" required="" value="<?= $result['email']?>"></td>
			</tr>
		<tr>
			<td>alamat</td>
			<td><input name="alamat" required="" value="<?= $result['alamat']?>"><td>
			</tr>
		<tr>
			<td>jurusan</td>
			<td><input type="text" name="jurusan" method="post" size="20" required="" value="<?= $result['jurusan']?>"></td>
			</tr>
		<tr>
			<td>fakultas</td>
			<td><input type="text" name="fakultas" method="post" size="20" required="" value="<?= $result['fakultas']?>"></td>
			</tr>
		<tr>
			<td>agama</td>
			<td><input type="text" name="agama" method="post" size="20" required="" value="<?= $result['agama']?>"></td>
			</tr>
		<tr>
			<td>telepon</td>
			<td><input type="text" name="telepon" method="post" size="15" required="" value="<?= $result['telepon']?>"></td>
			</tr>
			<tr>
				<td><button type="submit" name="submit">Simpan</button></td>
			</tr>
			<td><a href="index.php">Kembali</a></td>
			</table>
		</form>
</body>
</html>