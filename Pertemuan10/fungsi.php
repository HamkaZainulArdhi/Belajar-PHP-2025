<?php 

$db = mysqli_connect("localhost", "root", "", "buku");

function query($query) {
  global $db; // ambil variabel di luar fungsi ini
  $lemari = mysqli_query($db, $query); // $db: Koneksi ke database (yang dibuat sebelumnya). $query: Query SQL yang ingin dijalankan (dikirimkan ke fungsi sebagai argumen). Hasil dari query ini disimpan dalam variabel $lemari.

  $rows = []; //  Array kosong yang akan diisi dengan hasil query.
  while($row = mysqli_fetch_assoc($lemari)) { // Fungsi ini mengambil baris hasil query satu per satu dalam bentuk array asosiatif (kunci adalah nama kolom).
    $rows[] = $row; // Setiap baris yang diambil di $row trus ditambahkan ke dalam array $rows.
  }
    return $rows;
}

function tambah($data) {
  global $db;
  
  $id_buku = htmlspecialchars($data["id_buku"]);
  $judulbuku = htmlspecialchars ($data["Judul_buku"]);
  $jenisbuku = htmlspecialchars ($data["Jenis_buku"]);
  $pengarang = htmlspecialchars ($data["pengarang"]);
  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO buku
            VALUES ('$id_buku', '$judulbuku', '$jenisbuku', '$pengarang', 
            '$gambar')
            ";
  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

function upload (){
  
  $namafile = $_FILES['gambar']['name'];
  $ukuranfile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpname = $_FILES['gambar']['tmp_name'];

  // cek apakah tidak ada gambar yg di up
  if ($error === 4) {
      echo "<script>alert ('Pilih gambar terlebih dahulu')</script>";
  return false;
  }

  // yg boleh di up hnya gambar
  $ektensigambarvalid = ['jpg', 'jpeg', 'png'];
  $ektensigambar = explode('.', $namafile);
  $ektensigambar =  strtolower(end($ektensigambar));

  if (!in_array($ektensigambar, $ektensigambarvalid)){
     echo "<script>alert ('bukan gambar')</script>";
  return false;
  }

  if ($ukuranfile > 1000000){
     echo "<script>alert ('gambar gede bngt')</script>";
  return false;
  }

  // lolos pemgecekan, siap di up
  // generate nama baru biar g ada yg sama
  $namafilebaru = uniqid();
  $namafilebaru .= '.';
  $namafilebaru .= $ektensigambar;

  move_uploaded_file($tmpname, 'img/' . $namafilebaru);

  return $namafilebaru;


}

function hapus ($judul) {
  global $db;

  mysqli_query($db, "DELETE FROM buku WHERE Judul_buku = '$judul'");

  return mysqli_affected_rows($db);
}


function ubah($data) {
  global $db;

  $id_buku = htmlspecialchars($data["id_buku"]);
  $judul_buku_lama = ($data["Judul_buku_lama"]);
  $judulbuku = htmlspecialchars ($data["Judul_buku"]);
  $jenisbuku = htmlspecialchars ($data["Jenis_buku"]);
  $pengarang = htmlspecialchars ($data["pengarang"]);
  $gambarlama = ($data["gambarl"]);

  // cek apakah user milih gambar lagi nga
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarlama;
  } else {
    $gambar = upload();
  }
  

  

  $query = "UPDATE buku SET
             id_buku = '$id_buku',
             Judul_buku = '$judulbuku',
             Jenis_buku = '$jenisbuku',
             pengarang = '$pengarang',
             gambar = '$gambar'
             WHERE Judul_buku = '$judul_buku_lama' 
            ";
  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

function cari ($keyword) {

  $query = "SELECT * FROM buku WHERE 
  Judul_buku LIKE '%$keyword%' OR 
  Jenis_buku LIKE '%$keyword%' OR
  pengarang LIKE '%$keyword%' 
   ";

  return query($query);

}


?>