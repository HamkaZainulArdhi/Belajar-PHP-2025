<?php 

session_start();
session_unset(); // hapus sesion biar pasti ilang
session_destroy(); // hapus session

header ("Location: login.php");
exit;

?>