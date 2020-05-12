<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Comptaible" content="ie=edge">
    <title>TAMBAHKAN MAHASISWA</title>
<head>	
<body>
		<h1>Tambah data mahasiswa</h1>
		<form action="entry.php" method="post" name="form1">
		<table>
		<tr>
			<td>npm</td>
			<td><input type="text" name="nama" method="post" size="20" required="" ></td>
			</tr>
		<tr>
			<td>nama</td>
			<td><input type="text" name="npm" method="post" size="30" required="" ></td>
			</tr>
		<tr>
			<td>email</td>
			<td><input type="email" name="email" method="post" size="20" required="" ></td>
			</tr>
		<tr>
			<td>alamat</td>
			<td><textarea name="alamat" cols="30" rows="3" required="" ></textarea><td>
			</tr>
		<tr>
			<td>jurusan</td>
			<td><input type="text" name="jurusan" method="post" size="20" required="" ></td>
			</tr>
		<tr>
			<td>fakultas</td>
			<td><input type="text" name="fakultas" method="post" size="20" required="" ></td>
			</tr>
		<tr>
			<td>agama</td>
			<td><input type="text" name="agama" method="post" size="20" required="" ></td>
			</tr>
		<tr>
			<td>no telepon</td>
			<td><input type="txt" name="telepon" method="post" size="15" required="" ></td>
			</tr>
		<tr>
			<td><button type="submit" name="submit">Tambah</button></td>
			<td><button type="reset" name="reset">Reset</button></td>
			</tr>
			<td><a href="index.php">Kembali</a></td>
			</table>
			</form>
		
</body>
</html>