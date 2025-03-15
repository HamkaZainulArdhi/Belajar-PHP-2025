<?php 
require 'fungsi.php';

$judul = $_GET["Judul_buku"];

if ( hapus ($judul) > 0) {
   echo "
  <script>
    alert ('Data berhasil dihapus');
    document.location.href = 'pertemuan9.php';
  </script>
  ";
} else {
   echo "
  <script>
    alert ('Data  gagal dihapus');
    document.location.href = 'pertemuan9.php';
  </script>
  ";
}


?>