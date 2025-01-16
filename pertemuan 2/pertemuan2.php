<?php 

//looping
// for ( $i = 0; $i < 10; $i++) {
//   echo "helo wordl <br>" ;
// }


// $i = 0;
// while ($i < 5)  {
//   echo "heloo eorld <br>";
//   $i++;
// }
// $i = 1;
// do {
//   echo "hamka zainul <br>";
//   $i++;
// } while ($i < 5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
  .warna-garis {
    background-color: salmon;
  }

</style>
</head>


<body>
  <table border="1"cellpadding ="10">
    <?php 
      // for ($i = 1; $i <= 4; $i++){
      //     echo "<tr>";
      //     for ($j = 1; $j <= 5; $j++) {
      //       echo "<td>$i.$j</td>";
      //     }
      //     echo "</tr>";
      // }

      for ($i = 1; $i <= 5; $i++) : ?>
        <?php if ($i % 2 == 0) : ?>
          <tr class="warna-garis">
            <?php else : ?>
            <tr>
              <?php endif; ?>
            <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td><?= "$i, $j"; ?></td>
            <?php endfor; ?>
          </tr>
      <?php endfor; ?>
  </table>
</body>
</html>