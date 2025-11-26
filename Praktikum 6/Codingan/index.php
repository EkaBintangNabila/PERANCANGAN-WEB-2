<?php
session_start();

// Cek apakah sudah login atau belum
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home / Dashboard</title>
    <style>
        body {
            font-family: Arial;
            padding: 20px;
        }
        .logout-btn {
            background: red;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
        }
        .logout-btn:hover {
            background: darkred;
        }
    </style>
</head>
<body>

    <h2>Selamat datang, <?php echo $username; ?>!</h2>
    <p>Anda berhasil login.</p>

    <!-- TOMBOL LOGOUT -->
    <a href="logout.php" class="logo
