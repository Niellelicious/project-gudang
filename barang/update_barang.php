<?php
include '../config/koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama_barang'];
$stok = $_POST['stok'];
$tanggal = $_POST['tanggal'];

mysqli_query($conn, "UPDATE barang 
SET nama_barang='$nama', stok='$stok', tanggal_masuk='$tanggal'
WHERE id='$id'");

header("Location: index.php");
exit;
?>