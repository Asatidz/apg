<?php
session_start();
session_destroy();

echo "<p align='center'>Anda Telah Logout</p>";
echo "<meta http-equiv='refresh' content='2, url=login.php'>";
?>