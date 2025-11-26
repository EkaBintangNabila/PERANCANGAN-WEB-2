<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $pass1 = $_POST['password'];
    $pass2 = $_POST['password2'];
    $gender = $_POST['gender'];

    // Validasi sederhana
    if ($pass1 !== $pass2) {
        echo "<script>alert('Password dan konfirmasi tidak sama'); window.history.back();</script>";
        exit;
    }
    if ($username === '' || $pass1 === '') {
        echo "<script>alert('Isi semua field'); window.history.back();</script>";
        exit;
    }

    // Hash password (AMAN)
    $hash = password_hash($pass1, PASSWORD_DEFAULT);

    // Simpan ke DB (gunakan prepared statement)
    $stmt = mysqli_prepare($conn, "INSERT INTO login (username,password,gender) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss", $username, $hash, $gender);

    if (mysqli_stmt_execute($stmt)) {
        echo "<!doctype html><html><body><h3>User berhasil terdaftar</h3>
              <p>Username: " . htmlspecialchars($username) . "</p>
              <p><a href='login.php'>Klik untuk login</a></p></body></html>";
    } else {
        // kemungkinan username sudah ada (PK)
        echo "<script>alert('Gagal mendaftar: ".mysqli_error($conn)."'); window.history.back();</script>";
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Akses tidak valid.";
}
?>
