<?php
if(!defined('INDEX')) die("");


$id = $_POST['id'];
$nama = $_POST['nama'];
$query = "update jabatan set nama_jabatan = '$nama' where id_jabatan = '$id'";
$result = mysqli_query($con,$query);

if ($result) {
    echo "jabatan berhasil Diupdate";
    echo "<meta http-equiv='refresh' content='2; url=?hal=jabatan'>";
}else{
    echo "tidak dapat Mengupdate!!<br>";
    echo mysqli_error();
}
?>