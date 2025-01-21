<?php 

session_start();

if (!isset($_SESSION["masuk"])) { // cek user apakah user sudah login blom
  header("Location: login.php");
  exit;
}

require 'fungsi.php';

$judul = $_GET["Judul_buku"];

if ( hapus ($judul) > 0) {
   echo "
  <script>
    alert ('Data berhasil dihapus');
    document.location.href = 'index.php';
  </script>
  ";
} else {
   echo "
  <script>
    alert ('Data  gagal dihapus');
    document.location.href = 'index.php';
  </script>
  ";
}


?>