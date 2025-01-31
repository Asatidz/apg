<?php
session_start();
include "library/config.php";


$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "select * from user where username = '$username' and password = '$password'";
$hasil = mysqli_query($con,$query);
$data = mysqli_fetch_array($hasil);
$jml = mysqli_num_rows($hasil);

if ($jml > 0){
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    var_dump($data);
    
     header('location: index.php');
}else{
    echo "<p align='center'>Login Gagal</p>";
    echo "<meta http-equiv='refresh' content='2, url=login.php'>";
}
?>