<?php
require 'functions.php';

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
    <title>Ubah data mahasiswa</title>
</head>

<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</ button>
            </li>
        </ul>