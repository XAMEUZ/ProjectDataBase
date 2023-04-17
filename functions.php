<?php

$conn=mysqli_connect("localhost", "root", "root"
"phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) { 
        $rows[] = $row;
    }
    return $rows;
}


function tambah ($data) {
    global $conn;

    $id = $data["id"];
    $nama = $data["nama"];
    $email = $data["email"];
    $password = $data["password"];


    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$hrp', '$nama', '$email', '$jurusan', '$gambar
                    ')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus ($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id 
    return mysqli_affected_rows($conn);
}


function ubah ($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]); 
    $email = htmlspecialchars($data["email"]); 
    $jurusan = htmlspecialchars($data["jurusan"]); 
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET
               id = '$id',
               name = '$name',
               username = '$username',
               password = '$password'
               WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    }
    
function hapus ($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id

     return mysqli_affected_rows($conn);
}
