<?php
$conn = mysqli_connect("localhost", "root", "", "registrasi_mahasiswa");

if(!$conn){
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

