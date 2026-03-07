<?php
include "../config/koneksi.php";

if(isset($_POST['submit'])){

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

mysqli_query($conn,"INSERT INTO users VALUES('','$username','$password','$role')");

header("location:index.php");

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Tambah User</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="card">

<div class="card-header">
<h4>Tambah User</h4>
</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">
<label>Username</label>
<input type="text" name="username" class="form-control">
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control">
</div>

<div class="mb-3">
<label>Role</label>

<select name="role" class="form-control">

<option value="user">User</option>
<option value="admin">Admin</option>

</select>

</div>

<button name="submit" class="btn btn-primary">
Simpan
</button>

<a href="index.php" class="btn btn-secondary">
Kembali
</a>

</form>

</div>

</div>

</div>

</body>
</html>