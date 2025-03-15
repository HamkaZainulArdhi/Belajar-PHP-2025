<?php   
require 'fungsi.php'; // mangil fungsi di luar file ini
// $db = mysqli_connect("localhost", "root", "", "buku");

// ambil data mahasiswa
$buku = query ("SELECT * FROM Buku");

// ambil data fetch buku
// mysqli_fetch_row() = mengembalikan array numerik
// mysqli_fetch_assoc() = mengembalikan array asosiatif
// mysqli_fetch_array() = mengembalikan array asosiatif dan numerik tapi double
// mysqli_fetch_objeck() = varibel -> nama kolom

// while ($buku = mysqli_fetch_assoc($result)) {
//       var_dump($buku["Jenis_buku"]);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Tabel Buku</h1>
  <table border="1" cellpadding="10">
    <tr>
      <th>ID</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>Judul</th>
      <th>Jenis Buku</th>
      <th>Pengarang</th>
    </tr>

    <?php foreach($buku as $row) : ?>
    <tr>
      <td><?= $row["id_buku"]; ?></td>
      <td>
        <a href="">Ubah</a> |
        <a href="">hapus</a>
      </td>
      <td><img src="img/1.png" alt="" width="50"></td>
      <td><?= $row["Judul_buku"]; ?></td>
      <td><?= $row["Jenis_buku"]; ?></td>
      <td><?= $row["pengarang"]; ?></td>
    </tr>
  <?php endforeach; ?>
  </table>
</body>
</html>