<?php 

  require 'fungsi.php';

if (isset($_POST["masuk"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");
  
  // cek username
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result); // cek apakah ada baris nya atau ada data nya nya di db (db)
    if ( password_verify($password, $row["password"])) {
      $url = "http://localhost/BelajarPHP/";
      header("Location: $url/Pertemuan%201/pertemuan10/pertemuan9.php");
      exit;
    } 
  }
$error = true;
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  *{
    margin: 10px;
  }

  form {
    background-color: navy;
    padding: 30px;
    width: 13rem;
    border-radius: 30px;
  }

  p {
    font-style: italic;
    background-color: red;
    color: white;
  }
</style>
<body>
  <h1>LOGIN</h1>

  <form action="" method="post">
    <input type="text" name="username" id="username" placeholder="Username">
    <br>
    <input type="password" name="password" id="pasword" placeholder="password">
    <br> 
    <button type="sumbit" name="masuk">MASUK</button>
    <a href="registrasi.php">daftarkan </a>
  </form>
  <?php if ( isset($error)) :?>
    <p>username atau password salah kocak</p>
  <?php endif; ?>
</body>
</html>