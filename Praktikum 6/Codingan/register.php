<?php include 'koneksi.php'; ?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Register User</title>
  <style>body{font-family:Arial;padding:20px} .box{max-width:420px;margin:auto;background:#fff;padding:18px;border-radius:8px;box-shadow:0 4px 12px rgba(0,0,0,.06)}</style>
</head>
<body>
<div class="box">
  <h2>Form Pendaftaran User</h2>
  <form action="proses_register.php" method="post">
    <label>Username</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password</label><br>
    <input type="password" name="password" required><br><br>

    <label>Re-type Password</label><br>
    <input type="password" name="password2" required><br><br>

    <label>Gender</label><br>
    <label><input type="radio" name="gender" value="Laki-laki" required> Laki-laki</label>
    <label><input type="radio" name="gender" value="Perempuan" required> Perempuan</label><br><br>

    <button type="submit">Sign Up</button>
  </form>

  <p style="margin-top:10px"><a href="login.php">Sudah punya akun? Login</a></p>
</div>
</body>
</html>
