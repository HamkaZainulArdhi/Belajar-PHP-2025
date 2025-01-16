<?php 

// $angka = [[1, 2, 3, 4],
//         [5, 6, 7, 8]];
// echo $angka [1][0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .kotak{
    width: 30px;
    height: 30px;
    text-align: center;
    background-color: greenyellow;
    margin: 3px;
    float: left;
    transition: 1s ;
  }

  .kotak:hover {
    transform: rotate(360deg);
    border-radius: 50%;
  }

  .clear {
    clear: both;
  }
</style>
<body>
  <?php 
  $angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
  ?>
  <?php foreach($angka as $as) :?>
    <?php foreach($as as $b) : ?>
      <div class="kotak"><?= $b; ?> </div>
      <?php endforeach; ?>
      <div class="clear"></div>
  <?php endforeach; ?>
</body>
</html>