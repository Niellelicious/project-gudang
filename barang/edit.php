<?php
include '../config/koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM barang WHERE id='$id'");
$d = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Barang</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">
<div class="card-header bg-primary text-white">
<h4 class="mb-0">Edit Data Barang</h4>
</div>

<div class="card-body">

<form action="update_barang.php" method="POST">

<input type="hidden" name="id" value="<?php echo $d['id']; ?>">

<div class="mb-3">
<label class="form-label">Nama Barang</label>
<input type="text" name="nama_barang" class="form-control"
value="<?php echo $d['nama_barang']; ?>" required>
</div>

<div class="mb-3">
<label class="form-label">Stok</label>
<input type="number" name="stok" class="form-control"
value="<?php echo $d['stok']; ?>" min="1" required>
</div>

<div class="mb-3">
<label class="form-label">Tanggal</label>
<input type="date" name="tanggal" class="form-control"
value="<?php echo $d['tanggal_masuk']; ?>" required>
</div>

<div class="d-flex gap-2">
<button type="submit" class="btn btn-success">
Simpan Perubahan
</button>

<a href="../barang/index.php" class="btn btn-secondary">
Kembali
</a>
</div>

</form>

</div>
</div>

</div>

</body>
</html>