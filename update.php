<?php
		include("koneksi.php");  
        $npm = $_POST["npm"];
        $nama = $_POST["nama"];
        $email= $_POST["email"];
        $alamat = $_POST["alamat"];
		$jurusan = $_POST["jurusan"];
		$fakultas = $_POST["fakultas"];
		$agama = $_POST["agama"];
		$telepon = $_POST["telepon"];

		$query = mysqli_query($conn,"UPDATE mahasiswa SET
		nama='$nama',
		email='$email',
		alamat='$alamat',
		jurusan='$jurusan',
		fakultas='$fakultas',
		agama='$agama',
		telepon='$telepon'
	WHERE npm='$npm'");
	
			echo " <script>
				alert('Data berhasil di ubah');
				document.location.href = 'index.php';
				</script>";
?>