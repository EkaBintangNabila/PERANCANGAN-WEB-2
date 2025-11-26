<?php
session_start();
include 'koneksi.php';

// Jika session belum ada, cek cookie 'remember_user' dulu
if (!isset($_SESSION['username'])) {
    if (isset($_COOKIE['remember_user'])) {
        // jika cookie ada, set session lagi (opsional cek DB)
        $cookieUser = $_COOKIE['remember_user'];
        // bisa verifikasi ada di DB
        $res = mysqli_query($conn, "SELECT username FROM login WHERE username = '".mysqli_real_escape_string($conn,$cookieUser)."'");
        if (mysqli_num_rows($res) > 0) {
            $_SESSION['username'] = $cookieUser;
        } else {
            header("Location: login.php");
            exit;
        }
    } else {
        header("Location: login.php");
        exit;
    }
}

// ambil data user (opsional)
$user = $_SESSION['username'];
?>
<!doctype html>
<html lang="id">
<head><meta charset="utf-8"><title>Home</title></head>
<body>
<h2>Login anda: <?= htmlspecialchars($user) ?></h2>
<p>Ini di halaman utama (protected).</p>
<p><a href="logout.php">Logout</a></p>

<!-- contoh tampil semua mahasiswa (jika tabel mahasiswa ada) -->
<?php
// jika ingin menampilkan data mahasiswa, pastikan ada tabel mahasiswa
$res = mysqli_query($conn, "SELECT * FROM mahasiswa");
if ($res && mysqli_num_rows($res) > 0) {
    echo "<h3>Data Mahasiswa</h3><table border='1' cellpadding='6'><tr><th>No</th><th>Nama</th><th>NIM</th><th>Jurusan</th></tr>";
    $i=1;
    while($r = mysqli_fetch_assoc($res)){
        echo "<tr><td>".$i++."</td><td>".htmlspecialchars($r['nama'])."</td><td>".htmlspecialchars($r['nim'])."</td><td>".htmlspecialchars($r['jurusan'])."</td></tr>";
    }
    echo "</table>";
}


?>
</body>
</html>
