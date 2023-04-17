<?php
require 'functions.php';
$mahasiswa = query("SELECT FROM mahasiswa");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman Admin</title>
</head>

<body>

    <h1>Data User</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No. </th> 
            <th>Opsi</th>
            <th>ID</th>
            <th>Name</th>
            <th>User Name</th>
            <th>Password</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row): ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="update.php?id=<?= $row["id"]; ?>">update</a> |
                <a href="delete.php?id=<?= $row["id"]; ?>" onclick="
                    return confirm('yakin?');">delete</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["nrp"]; ?></td>
