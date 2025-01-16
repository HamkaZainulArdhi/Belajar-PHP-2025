<?php 

$angka = [3, 4, 6, 11, 23, 1, 3, 4, 50 ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  div {
    width: 50px;
    height: 50px;
    background-color: salmon;
    text-align: center;
    margin: 10px;
  }

  .clear {clear: both;}

</style>
<body>
<?php for ($i = 0; $i < count($angka); $i++) { ?>
<div class="kotak"><?= $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>
  <?php foreach($angka as $a) {?>
   <div class="kotak"> <?= $a ?> </div>
   <?php } ?> 

<div class="clear"></div>
  <?php foreach($angka as $a) :?>
   <div class="kotak"> <?= $a ?> </div>
   <?php endforeach; ?> 
</body>
</html>