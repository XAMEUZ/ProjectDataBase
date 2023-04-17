<?php
require 'functions.php';

//Koneksi ke DATABASE
$conn = mysqli_connect("localhost", "root", "root", "namanya");

if ( isset ($_POST["submit"])) {}

  // cek apakah data berhasil di tambahkan atau tidak
  if( tambah($_POST) > 0 ) {
    echo "
    <script>
    alert('Data berhasil ditambahkan!');
    document.location href = 'index.php';
    </script>
    ";

  } else {
    echo "
    <script>
    alert('Data gagal ditambahkan!');
    document.location.href ='index.php';
    </script>
    ";
  }

<!DOCTYPE html>
<html>
  <head>
    <title> Insert Data </title>
</head>

<body>
  <h1> Insert Data </h1>
  <form action="" method="post">

    <ul>
      <li>
        <label for="userid">UserID :</label>
        <input type="text" name="UserID" id="userid">
</li>
      <li>
        <label for="nama">Nama :</label>
        <input type="text" name="Nama" id="nama">
</li>
      <li>
        <label for="email">Email :</label>
        <input type="text" name="Email" id="email">
</li>
      <li>
        <label for="password">Password :</label>
        <input type="text" name="Password" id="password"
        required>
</li>
<li>
  <button type="Submit"></button>
//formnya sesuaiin sama tabel ada berapa data, lalu tinggal tambahin required kalau wajib diisi

// yang dibawah ini buat di functions.php yaa sekitar line 18an

function tambah($data){
  global $conn;

  $id = $data["id"];
  $nama = $data["nama"];
  $email = $data["email"];
  $password = $data["password"];

  $query = "INSERT INTO namadatabase
      VALUES ('', '$id', '$nama', '$email', '$password')
      ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);  
  //Kalau gagal ada output -1 , kalau data berhasil di tambah ada output +1 ( return mysqli_affected_rows)
}

