<?php 
// cek apakah tombol sumbit sudah di tekan belom
if(isset($_POST["submit"])) {

// cek usernaem dan pasword
  if($_POST["nama"] == "admin" && $_POST["Password"] == "12345") {
// jika benar redirect ke halaman admin
      header("Location: pertemuan6.login.php");
      exit;
} else {
// jika salah tampilkan pesan salah
      $error = true;
      }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>LOGIN</h1>
<ul>
  <form action="" method="post">
    <li><input type="text" name="nama" placeholder="nama"></li>
    <li><input type="password" name="Password" id="" placeholder="password"></li>
    <?php if (isset($error)) : ?>
    <p>username / paswword salah</p>
    <?php endif; ?>
    <button type="submit" name="submit">Masuk</button>
  </form>
</ul>
</body>
</html>