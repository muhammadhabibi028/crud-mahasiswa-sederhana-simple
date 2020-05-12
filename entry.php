<?php
		require "koneksi.php";  
        $nama = $_POST["npm"];
        $npm = $_POST["nama"];
        $email= $_POST["email"];
        $alamat = $_POST["alamat"];
		$jurusan = $_POST["jurusan"];
		$fakultas = $_POST["fakultas"];
		$agama = $_POST["agama"];
		$telepon = $_POST["telepon"];

		$query = mysqli_query($conn,"INSERT INTO mahasiswa VALUES
		('$npm','$nama','$email','$alamat','$jurusan','$fakultas','$agama','$telepon')");
		if (isset($query)) {
			echo "<script>
				alert('Data berhasil di tambahkan');
				document.location.href='index.php';
				</script>";
		}
		
?>