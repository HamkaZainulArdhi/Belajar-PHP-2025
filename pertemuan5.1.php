<?php 
$mahasiswa = [["nama" =>"hamka",
"NIM" => "231110315",
"Prodi" => "SIStem",
"Fak" => "FIF",
"gambar" =>"1.png"],

["nama" =>"hamkazaq",
"NIM" => "231110315",
"Prodi" => "SIStem",
"Fak" => "FIF",
"gambar" => "2.png"]

];


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

  <?php foreach($mahasiswa as $mhs) : ?>
  <ul>
    <li><img src="img/<?= $mhs["gambar"]; ?>" alt="" srcset=""></li>
    <li>nama : <?= $mhs["nama"]; ?></li>
    <li>NIM : <?= $mhs["NIM"]; ?></li>
    <li>Prodi :<?= $mhs["Prodi"]; ?></li>
    <li>Fakultas :<?= $mhs["Fak"]; ?></li>
  </ul>
  <?php endforeach; ?>
</body>
</html>