<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php if (isset($_POST["submit"]) ): ?>
  <h1>selamat datanng <?= $_POST["nama"]; ?></h1>
  <?php endif; ?>
</body>
</html>