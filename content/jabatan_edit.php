<?php
if(!defined('INDEX')) die("");

$id = $_GET['id'];
$query = "select * from jabatan where id_jabatan='$id'";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);


?>


<h2 class="judul">Edit Pegawai</h2>
        <form action="?hal=jabatan_update" method="post">
          <!-- input foto -->
           <input type="hidden" name="id" value="<?= $data['id_jabatan']?>">
          <div class="form-group">
            <label for="nama">Nama Jabatan</label>
            <div class="input">
              <input type="text" name="nama" id="nama" value="<?=$data['nama_jabatan']?>"/>
            </div>
          </div>

          <!-- input nama -->
          <div class="form-group">
            <input type="reset" value="Reset" class="tombol reset">
            <input type="submit" value="Simpan" class="tombol simpan">
          </div>
        </form>