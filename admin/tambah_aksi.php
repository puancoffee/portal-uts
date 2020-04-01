<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$name = $_POST['name'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];

// menginput data ke database
mysqli_query($koneksi,"insert into absen  values('','$name','$tanggal','$jam')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
