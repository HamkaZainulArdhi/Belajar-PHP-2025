<?php 

require 'fungsi.php';
//cek apakah submit udh di klik belum
if (isset($_POST["submit"])) {
  

  // ambil data dari tiap elemen form
  // $id_buku = $_POST["id_buku"];
  // $judulbuku = $_POST["Judul_buku"];
  // $jenisbuku = $_POST["Jenis_buku"];
  // $pengarang = $_POST["pengarang"];
  // $gambar = $_POST["gambar"];

  // query insert data
  // $query = "INSERT INTO buku
  //           VALUES ('$id_buku', '$judulbuku', '$jenisbuku', '$pengarang', 
  //           '$gambar')
  //           ";
  // mysqli_query($conn, $query);

  // cek keberhasilan apakah data berhasil di tambahkan
 if( tambah($_POST) > 0) {
  echo "
  <script>
    alert ('Data berhasil di tambahkan');
    document.location.href = 'pertemuan8.php';
  </script>
  ";
 } else {
  echo "
  <script>
    alert ('Data berhasil di tambahkan');
    document.location.href = 'pertemuan8.php';
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

  <form action="" method="post">
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
        <input type="text" name="gambar" placeholder="Gambar">
      </li>
      <li>
        <button type="submit" name="submit">kirim</button>
      </li>
      </ul>

  </form>
</body>
</html>

