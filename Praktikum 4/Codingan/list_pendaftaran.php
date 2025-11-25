

<?php
include "koneksi.php";

$query = "SELECT * FROM peserta";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Peserta Lomba</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Daftar Peserta Lomba</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jenis Lomba</th>
        </tr>

        <?php 
        $no = 1;
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['umur']; ?></td>
            <td><?= $row['jenis_lomba']; ?></td>
        </tr>
        <?php } ?>
    </table>

    <br>
    <a href="index.html" class="btn">Tambah Peserta</a>
</div>

</body>
</html>
