<?php

session_start();
include "../config/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");
$data = mysqli_fetch_assoc($query);

if($data){

if($password == $data['password']){

$_SESSION['username'] = $data['username'];
$_SESSION['role'] = $data['role'];

header("location:../dashboard.php");

}else{

echo "Password salah";

}

}else{

echo "User tidak ditemukan";

}

?>