<?php
include "koneksi.php";

$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa (Publik)</title>
</head>
<body>

<h2>Data Mahasiswa (Publik)</h2>
<a href="login.php">Login Admin</a>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['nim']; ?></td>
            <td><?= $row['jurusan']; ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
