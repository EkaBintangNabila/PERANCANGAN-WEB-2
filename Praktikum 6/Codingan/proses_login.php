<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <style>body{font-family:Arial;padding:20px}.box{max-width:360px;margin:auto;padding:18px;background:#fff;border-radius:8px;box-shadow:0 4px 12px rgba(0,0,0,.06)}</style>
</head>
<body>
<div class="box">
  <h2>Proses Login</h2>
  <form action="proses_login.php" method="post">
    <label>Username</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password</label><br>
    <input type="password" name="password" required><br><br>

    <label><input type="checkbox" name="remember" value="1"> Ingat saya (cookies)</label><br><br>

    <button type="submit">Login</button>
  </form>

  <p style="margin-top:10px"><a href="register.php">Belum punya akun? Daftar</a></p>
</div>
</body>
</html>
