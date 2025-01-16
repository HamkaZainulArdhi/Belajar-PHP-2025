<?php 

$db = mysqli_connect("localhost", "root", "", "buku");

function query($query) {
  global $db;
  $lemari = mysqli_query($db, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($lemari)) {
    $rows[] = $row;
  }
    return $rows;
}


?>