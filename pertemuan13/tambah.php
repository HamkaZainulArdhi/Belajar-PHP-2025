<?php 
session_start();

if (!isset($_SESSION["masuk"])) { // cek user apakah user sudah login blom
  header("Location: login.php");
  exit;
}

require 'fungsi.php';
//cek apakah submit udh di klik belum
if (isset($_POST["submit"])) {
  


  // cek keberhasilan apakah data berhasil di tambahkan
 if( tambah($_POST) > 0) {
  echo "
  <script>
    alert ('Data berhasil di tambahkan');
    document.location.href = 'index.php';
  </script>
  ";
 } else {
  echo "
  <script>
    alert ('Data TIDAK berhasil di tambahkan');
    document.location.href = 'index.php';
  </script>
  ";
 }
 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Tambah data mahasiswa</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <input type="number" name="id_buku" placeholder="Id Buku" require>
      </li>
      <li>
        <input type="text" name="Judul_buku" placeholder="Judul" re>
      </li>
      <li>
        <input type="text" name="Jenis_buku" placeholder="Jenis Buku" >
      </li>
      <li>
        <input type="text" name="pengarang" placeholder="Nama Pengarang">
      </li>
      <li>
        <input type="file" name="gambar" placeholder="Gambar">
      </li>
      <li>
        <button type="submit" name="submit">kirim</button>
      </li>
      </ul>

  </form>
</body>
</html>

