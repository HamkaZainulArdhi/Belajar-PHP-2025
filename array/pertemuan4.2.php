<?php 

// $mahasiswa = ["hamka", "23112121","sistem informasi" ];
// aray multidivensi // aray di dalam earray
$mahasiswa = [["hamka", "23112121","sistem informasi" ],
              ["hamkqa", "2311q2121","sistqem informasi"]];
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
    <li>nama : <?= $mhs[0]; ?></li>
    <li>NIM : <?= $mhs[1]; ?></li>
    <li>Prodi :<?= $mhs[2]; ?></li>
  </ul>
  <?php endforeach; ?>
</body>
</html>