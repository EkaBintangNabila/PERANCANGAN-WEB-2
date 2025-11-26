<?php
session_start();
// hapus session
session_unset();
session_destroy();
// hapus cookie remember kalau ada
setcookie('remember_user', '', time() - 3600, "/");
header("Location: login.php");
exit;
?>
