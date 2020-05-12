<?php
$conn = mysqli_connect("localhost","root","","pertemuan");
   if(isset($conn)){
	   echo "Database Berhasil terkoneksi";
   } else {
	   echo "koneksi gagal";
   }

?>