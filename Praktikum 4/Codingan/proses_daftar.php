<?php
include "koneksi.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jenis_lomba = $_POST['jenis_lomba'];

    $query = "INSERT INTO peserta (nama, umur, jenis_lomba)
              VALUES ('$nama', '$umur', '$jenis_lomba')";

    if(mysqli_query($conn, $query)){
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Berhasil Mendaftar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            width: 400px;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 5px 12px rgba(0,0,0,0.1);
        }

        h2 {
            color: #1f7a1f;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px;
            margin: 6px 0;
        }

        .btn-area {
            margin-top: 20px;
        }

        a {
            text-decoration: none;
            background: #1f7a1f;
            color: white;
            padding: 10px 18px;
            border-radius: 6px;
            margin: 5px;
            display: inline-block;
        }

        a:hover {
            background: #145214;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>🎉 Pendaftaran Berhasil!</h2>

    <p><strong>Nama Peserta:</strong> <?= $nama ?></p>
    <p><strong>Umur:</strong> <?= $umur ?> Tahun</p>
    <p><strong>Jenis Lomba:</strong> <?= $jenis_lomba ?></p>

    <div class="btn-area">
        <a href="index.html">Daftar Lagi</a>
        <a href="list_pendaftaran.php">Lihat Peserta</a>
    </div>
</div>

</body>
</html>

<?php
    } else {
        echo "❌ Error menyimpan data: " . mysqli_error($conn);
    }
} else {
    echo "⚠ Akses tidak valid!";
}
?>
