<?php   
require 'fungsi.php'; // manggil fungsi di luar file ini
// pake include bisa
// $db = mysqli_connect("localhost", "root", "", "buku");

// ambil data mahasiswa
$buku = query ("SELECT * FROM Buku");

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

  <a href="tambah.php">tambah data mahasiswa</a>
  <br><br>
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
        <a href="hapus.php?Judul_buku=<?= $row["Judul_buku"]; ?>"
        onclick="return confirm ('yaqin ?'); ">hapus</a>
      </td>
      <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="50"></td>
      <td><?= $row["Judul_buku"]; ?></td>
      <td><?= $row["Jenis_buku"]; ?></td>
      <td><?= $row["pengarang"]; ?></td>
    </tr>
  <?php endforeach; ?>
  </table>
</body>
</html>