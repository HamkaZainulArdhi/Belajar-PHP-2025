<?php 

$db = mysqli_connect("localhost", "root", "", "buku");

function query($query) {
  global $db; // ambil variabel di luar fungsi ini
  $lemari = mysqli_query($db, $query); // $db: Koneksi ke database (yang dibuat sebelumnya). $query: Query SQL yang ingin dijalankan (dikirimkan ke fungsi sebagai argumen). Hasil dari query ini disimpan dalam variabel $lemari.

  $rows = []; //  Array kosong yang akan diisi dengan hasil query.
  while($row = mysqli_fetch_assoc($lemari)) { // Fungsi ini mengambil baris hasil query satu per satu dalam bentuk array asosiatif (kunci adalah nama kolom).
    $rows[] = $row; // Setiap baris yang diambil di $row trus ditambahkan ke dalam array $rows.
  }
    return $rows;
}


?>