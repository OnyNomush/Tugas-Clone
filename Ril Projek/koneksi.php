<?php
$host="localhost";
$username="root";
$pass="";
$db="edukasi_sampah";
$koneksi=mysqli_connect($host,$username,$pass);
$db_koneksi=mysqli_select_db($koneksi, $db);
?>