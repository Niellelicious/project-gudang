<?php
session_start();
include 'config/koneksi.php';

// contoh ambil data
$total_barang = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM barang"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard Gudang</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

.card{
border:none;
border-radius:10px;
}

</style>

</head>
<body>

<div class="container-fluid">
<div class="row">

<!-- SIDEBAR -->

<div class="col-md-2 sidebar">

<h5 class="mb-4">📦 Gudang App</h5>

<a href="dashboard.php">Dashboard</a>
<a href="barang/index.php">Barang</a>

<?php if($_SESSION['role'] == 'admin'){ ?>

<a href="user/index.php">User</a>

<?php } ?>

<hr>

<a href="auth/logout.php">Logout</a>

</div>

<!-- CONTENT -->

<div class="col-md-10 p-4">

<h3 class="mb-4">Dashboard</h3>

<!-- CARD STAT -->

<div class="row">

<div class="col-md-3">
<div class="card shadow-sm">
<div class="card-body">
<h6>Total Barang</h6>
<h3><?php echo $total_barang ?></h3>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow-sm">
<div class="card-body">
<h6>Barang Masuk</h6>
<h3>120</h3>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow-sm">
<div class="card-body">
<h6>Barang Keluar</h6>
<h3>90</h3>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow-sm">
<div class="card-body">
<h6>Stok Tersedia</h6>
<h3>320</h3>
</div>
</div>
</div>

</div>

<!-- CHART -->

<div class="row mt-4">

<div class="col-md-8">
<div class="card shadow-sm">
<div class="card-body">
<h6>Grafik Barang</h6>
<canvas id="chartBarang"></canvas>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card shadow-sm">
<div class="card-body">
<h6>Distribusi Stok</h6>
<canvas id="pieChart"></canvas>
</div>
</div>
</div>

</div>

</div>
</div>
</div>

<script>

const ctx = document.getElementById('chartBarang');

new Chart(ctx, {
type: 'line',
data: {
labels: ['Jan','Feb','Mar','Apr','Mei','Jun'],
datasets: [{
label: 'Barang Masuk',
data: [10,20,30,25,40,50],
borderColor: 'blue',
fill:true
}]
}
});

const pie = document.getElementById('pieChart');

new Chart(pie, {
type:'doughnut',
data:{
labels:['Elektronik','ATK','Furniture'],
datasets:[{
data:[30,40,20]
}]
}
});

</script>

</body>
</html>