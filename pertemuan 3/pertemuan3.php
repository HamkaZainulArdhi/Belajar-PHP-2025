<?php 
// L = hari
// d = tanggal
// M = bulan 
// m = dalam bentuk angka
// Y = tahun
    // echo date("l, d-M-Y");

// unix timestamp / EPOCH time
// detik yang sudah berlaku
// echo time();
// echo date("l", time()+172800); // output : next 2 hari
// echo date("l", time()+60*60*24*3); // seratus hari kedepan

// ?mktime()
// membuat sendiri detik
// jam ,menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,3,23,2004)) ; \\ mengetahui hari lahir kita

// ?shorttime
// echo date("l", strtotime("12 march 2024"));

$nama = "hamka";
function hello($nama) {
    return "selamat datang, $nama!";    
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
    <H1><?= hello($nama);?> </H1>
</body>
</html>