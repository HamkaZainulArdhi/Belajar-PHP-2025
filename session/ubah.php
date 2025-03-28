<?php 

session_start();

if (!isset($_SESSION["masuk"])) { // cek user apakah user sudah login blom
  header("Location: login.php");
  exit; // jika belum maka akan di arahkan ke halaman login
}

require 'fungsi.php'; // koneksi ke fugsi php

// ambil URl pke get
$Judul = $_GET["Judul_buku"];

// query ubah update using prepared statements
$stmt = $conn->prepare("SELECT * FROM buku WHERE Judul_buku = ?");
$stmt->bind_param("s", $Judul);
$stmt->execute();  
$result = $stmt->get_result();
$buk = $result->fetch_assoc();
$stmt->close(); // close statement                              


//cek apakah submit udh di klik belum
if (isset($_POST["submit"])) {

  // cek keberhasilan apakah data berhasil di tambahkan
 if( ubah($_POST) > 0) {
  echo "
  <script>
    alert ('Data berhasil diubah');
    document.location.href = 'index.php';
  </script>
  ";
 } else {
  echo "
  <script>
    alert ('Data gagal diubah');
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
  <h1>ubah data mahasiswa</h1>

        <input type="number" name="id_buku" placeholder="Id Buku" required value="<?= $buk["id_buku"]; ?>">
    <input type="hidden" name="Judul_buku_lama" value="<?= $buk["Judul_buku"]; ?>">
    <input type="hidden" name="gambarlama" value="<?= $buk["gambar"]; ?>">
    <ul>
      <li>
        <input type="number" name="id_buku" placeholder="Id Buku" require value="<?= $buk["id_buku"]; ?>">
      </li>
      <li>
        <input type="text" name="Judul_buku" placeholder="Judul" value="<?= $buk["Judul_buku"]; ?>">
      </li>
      <li>
        <input type="text" name="Jenis_buku" placeholder="Jenis Buku" value="<?= $buk["Jenis_buku"]; ?>" >
      </li>
      <li>
        <input type="text" name="pengarang" placeholder="Nama Pengarang" value="<?= $buk["pengarang"]; ?>">
      </li>
      <li>
        <img src="img/<?= $buk["gambar"]; ?>" width="50" alt="">
        <br>
        <input type="file" name="gambar" placeholder="Gambar">
      </li>
      <li>
        <button type="submit" name="submit">ubah </button>
      </li>
      </ul>

  </form>
</body>
</html>

