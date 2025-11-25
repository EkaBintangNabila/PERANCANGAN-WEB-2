<?php
session_start();
include "koneksi.php";

// Cek apakah admin sudah login
if(!isset($_SESSION['admin'])){
    echo "<script>alert('Silakan login terlebih dahulu!'); window.location='login.php';</script>";
    exit;
}

// Ambil data mahasiswa dari database
$query = "SELECT * FROM mahasiswa ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 20px;
        }
        h2{
            text-align: center;
        }
        table{
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td{
            border: 1px solid gray;
        }
        th{
            background-color: #4CAF50;
            color: white;
            padding: 10px;
        }
        td{
            background-color: white;
            padding: 8px;
            text-align: center;
        }
        .logout{
            display: block;
            width: 200px;
            padding: 10px;
            margin: 15px auto;
            background: red;
            color: white;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
        }
        .logout:hover{
            background: darkred;
        }
    </style>
</head>
<body>

<h2>📌 Halaman Admin</h2>
<p style="text-align:center;">Halo, <b><?php echo $_SESSION['admin']; ?></b> 👋</p>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['nim']; ?></td>
            <td><?= $row['jurusan']; ?></td>
        </tr>
    <?php } ?>
</table>

<a href="logout.php" class="logout">Logout</a>

</body>
</html>

