<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  form {
    margin: 30px;
  }

  input {
    margin-bottom: 30px;
    width: 10rem;
    height: 40px;
  }
</style>
<body>
  <?php if (isset($_POST["submit"]) ): ?>
  <h1>selamat datanng <?= $_POST["nama"]; ?></h1>
  <?php endif; ?>

  <form action="" method="post">
    
    <input type="text" placeholder="Nama" name="nama">
    <br>
    <input type="number" placeholder="NiM" name="NIM">
    <br>
    <button type="submit" name="submit">Kirim!</button>
  </form>
</body>
</html>