<?php
session_start();
ob_start();

include "library/config.php";

if(empty($_SESSION['username']) OR empty($_SESSION['password'])) {
    echo "<p align='center'>Anda Harus Login Sek Brohh!!</p>";
    echo "<meta http-equiv='refresh' content='2; url=login.php'>";
}else{
    define('INDEX', true);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <title>Login Aplikasi</title> -->
    <!-- HTML Meta Tags -->
    <title>Aplikasi Manajemen Pegawai</title>
    <meta
      name="description"
      content="Aplikasi Pengelolaan Data Pegawai Perusahaan"
    />

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://asatidz.github.io/apg/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Aplikasi Manajemen Pegawai" />
    <meta
      property="og:description"
      content="Aplikasi Pengelolaan Data Pegawai Perusahaan"
    />
    <meta
      property="og:image"
      content="https://opengraph.b-cdn.net/production/images/90ee8535-1acf-414d-87b2-5b8231803e60.jpg?token=NDlZkQ9nkSUBvJVSi7Eg6o2aYV3QBc6sIv4j2aIiF2Y&height=800&width=1200&expires=33271380014"
    />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="asatidz.github.io" />
    <meta property="twitter:url" content="https://asatidz.github.io/apg/" />
    <meta name="twitter:title" content="Aplikasi Manajemen Pegawai" />
    <meta
      name="twitter:description"
      content="Aplikasi Pengelolaan Data Pegawai Perusahaan"
    />
    <meta
      name="twitter:image"
      content="https://opengraph.b-cdn.net/production/images/90ee8535-1acf-414d-87b2-5b8231803e60.jpg?token=NDlZkQ9nkSUBvJVSi7Eg6o2aYV3QBc6sIv4j2aIiF2Y&height=800&width=1200&expires=33271380014"
    />

    <!-- Meta Tags Generated via https://www.opengraph.xyz -->
    <link rel="shortcut icon" href="img/officer.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- header -->
    <header>Aplikasi Manajemen Pegawai</header>

    <div class="container">
      <!-- menu -->
      <aside>
        <ul class="menu">
          <li><a href="?hal=dashboard" class="aktif">Dashboard</a></li>
          <li><a href="?hal=pegawai">Data Pegawai</a></li>
          <li><a href="?hal=jabatan">Data Jabatan</a></li>
          <li><a href="?hal=logout.php">Keluar</a></li>
        </ul>
      </aside>

      <!-- content -->
      <section class="main">
        <?php include "konten.php" ?>
      </section>
    </div>

    <!-- footer -->
    <footer>Copyright &copy; Asatidzal Hakiim</footer>
  </body>
</html>

<?php
}
?>
