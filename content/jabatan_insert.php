<?php
if(!defined('INDEX')) die("");

$nama_jabatan = $_POST['nama'];
$query = "insert into jabatan set nama_jabatan = '$nama_jabatan'";
$result = mysqli_query($con,$query);

if ($result) {
    echo "jabatan <b>$nama_jabatan</b> berhasil disimpan";
    echo "<meta http-equiv='refresh' content='2; url=?hal=jabatan'>";
}else{
    echo "tidak dapat menyimpan";
    echo mysqli_error();
}
?>