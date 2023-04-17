<?php
require 'functions.php';

// Ambil data di URL
$id = $_GET["id"];
// Query data user berdasarkan id
$usr = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
var_dump($usr["name"]);

// cek apakah tombol submit sudah ditekan atau belum 
if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
                <script>
                    alert('Data berhasil diubah!');
                    document.location.href =
                     'index.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('Data gagal diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ubah Data User</title>
</head>

<body>
    <h1>Ubah Data User</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="ID">ID : </label>
                <input type="text" name="id" id="id" required value="<?= $usr["id"] ?>">
            </li>
            <li>
                <label for="nama">Name : </label>
                <input type="text" name="name" id="name" value="<?= $usr["name"] ?>">>
            </li>
            <li>
                <label for="email">User Name :</label>
                <input type="text" name="username" id="username" value="<?= $usr["username"] ?>">>
            </li>
            <li>
                <label for="jurusan">Password :</label>
                <input type="text" name="password" id="password" value="<?= $usr["password"] ?>">>
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data User!</button>
            </li>
        </ul>