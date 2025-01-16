<?php 
// cek aapakah tidak ada data di GET
// gunakan isset , adlh untuk mengcek apakah sebuah variabel sudah di buat atau belum?

if (!isset($_GET["nama"]) || 
    !isset($_GET["NIM"])||
    !isset($_GET["gambar"])) {
  // redirek : memindahkan paksa user ke halaman sebelumnya
  header("location: pertemuan6.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>identitas mahasiswa</h1>


  <ul>
    <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
    <li>nama : <?= $_GET["nama"]; ?></li>
    <li>NIM : <?= $_GET["NIM"]; ?></li>
  </ul>
</body>
</html>