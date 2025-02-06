<?Php 

require 'fungsi.php';

if (isset($_POST["register"])) {

  if(registrasi ($_POST) > 0 ) {
    echo "<script>
          alert ('user baru di tambahkan')
          </script>";
  } else {
    echo mysqli_error($db);
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
</style>
<body>
  <h1>Register</h1>

  <form action="" method="post">
    <input type="text" name="username" id="username" placeholder="Username">
    <br>
    <input type="password" name="password" id="pasword" placeholder="password">
    <br> 
    <input type="password" name="password2" id="pasword2" placeholder="ulangi password">
    <br>
    <button type="sumbit" name="register">Register</button>
  </form>
  
</body>
</html>