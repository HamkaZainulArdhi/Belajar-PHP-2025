<!-- variabel scope / lingkup variabel -->

<?php 
// $x = 10;

// function tampilx(){
//   global $x;
//   echo  $x;
// }

// echo tampilx();


// SU{PEr}GLOBAR variabel//

// var_dump($_GET);
?>

<?php 
$mahasiswa = [["nama" =>"hamka",
"NIM" => "231110315",
"Prodi" => "SIStem",
"Fak" => "FIF",
"gambar" =>"1.png"],

["nama" =>"zain",
"NIM" => "211110315",
"Prodi" => "SIStem",
"Fak" => "FIF",
"gambar" => "2.png"]

];


?>

<!-- metode reques get adalah metode super global yang mana data di kirimkan melalui URL 
 dan data tersebut bisa di ambil atau di tangakap variavbel lain nya menggunkan get jg -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>identitas mahasiswa</h1>
 <ul>
  <?php foreach($mahasiswa as $mhs) : ?>
 
    <li><a href="latihan6.php?nama=<?= $mhs["nama"]; ?>&NIM=<?= $mhs["NIM"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
   <?= $mhs["nama"]; ?></a></li>
  
  <?php endforeach; ?>
  </ul>
</body>
</html>