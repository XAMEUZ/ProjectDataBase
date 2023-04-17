<?php

$conn=mysqli_connect("localhost", "root", "root"
"phpdasar");

function query($query) {
global $conn;
$result = mysqli_query($conn, $query);
$rows = [];
while( $row = mysqli_fetch_assoc($result) ) { $rows[] = $row;
}
I
return $rows;
}
function tambah ($data) {
global $conn;
  
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
