<?php
$host = "localhost";
$user = "root";
$pass = "admin1234";
$db   = "topsis";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
  echo "Belum Konek";
} else {
  //echo "Sudah Konek";
}
 ?>
