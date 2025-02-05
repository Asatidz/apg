<?php
if(!defined('INDEX')) die("");


$id = $_GET['id']; 
$query = "delete from jabatan where id_jabatan = '$id'";
$result = mysqli_query($con,$query);

if ($result) {
    echo "jabatan berhasil Dihapus";
    echo "<meta http-equiv='refresh' content='2; url=?hal=jabatan'>";
}else{
    echo "tidak dapat Menghapus!!<br>";
    echo mysqli_error();
}
?>