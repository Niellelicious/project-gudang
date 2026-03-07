<?php
session_start();
include '../config/koneksi.php';

$data = mysqli_query($conn,"SELECT * FROM barang");
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Barang</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>

body{
background:#f4f6f9;
}

.sidebar{
height:100vh;
background:white;
border-right:1px solid #ddd;
padding:20px;
}

.sidebar a{
display:block;
padding:10px;
color:#333;
text-decoration:none;
margin-bottom:5px;
}

.sidebar a:hover{
background:#f1f1f1;
border-radius:5px;
}

</style>

</head>
<body>

<div class="container-fluid">
<div class="row">

<!-- SIDEBAR -->

<div class="col-md-2 sidebar">

<h5 class="mb-4">📦 Gudang App</h5>

<a href="../dashboard.php">Dashboard</a>
<a href="index.php">Barang</a>

<?php if($_SESSION['role'] == 'admin'){ ?>
<a href="../user/index.php">User</a>
<?php } ?>

<hr>

<a href="../auth/logout.php">Logout</a>

</div>

<!-- CONTENT -->

<div class="col-md-10 p-4">

<div class="d-flex justify-content-between align-items-center mb-4">
<h3>Data Barang</h3>

<a href="tambah.php" class="btn btn-primary">
<i class="bi bi-plus-lg"></i> Tambah Barang
</a>

</div>

<div class="card shadow-sm">
<div class="card-body">

<table class="table table-bordered table-hover">

<thead class="table-dark">
<tr>
<th>No</th>
<th>Nama Barang</th>
<th>Stok</th>
<th>Tanggal Masuk</th>
<th>Aksi</th>
</tr>
</thead>

<tbody>

<?php 
$no=1;
while($d=mysqli_fetch_array($data)){
?>

<tr>

<td><?php echo $no++; ?></td>
<td><?php echo $d['nama_barang']; ?></td>
<td><?php echo $d['stok']; ?></td>
<td><?php echo $d['tanggal_masuk']; ?></td>

<td>

<a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-warning btn-sm">
<i class="bi bi-pencil"></i>
</a>

<a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm">
<i class="bi bi-trash"></i>
</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>
</div>

</div>
</div>
</div>

</body>
</html>