<?php
include "../config/koneksi.php";

if(isset($_POST['submit'])){

$nama = $_POST['nama_barang'];
$stok = $_POST['stok'];
$tanggal = $_POST['tanggal'];

mysqli_query($conn,"INSERT INTO barang VALUES('','$nama','$stok','$tanggal')");

header("location:index.php");

}
?>

<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h3>Tambah Barang</h3>

<form method="POST">

<div class="mb-3">
<label class="form-label">Nama Barang</label>
<input type="text" name="nama_barang" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Stok</label>
<input type="number" name="stok" class="form-control" min="1" required>
</div>

<div class="mb-3">
<label class="form-label">Tanggal</label>
<input type="date" name="tanggal" class="form-control" required>
</div>

<button name="submit" class="btn btn-primary">Simpan</button>

</form>

</div>

</body>
</html>