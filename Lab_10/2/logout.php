<?php
setcookie('username', '', time() - 3600, "/"); // Destroy the cookie
header('Location: login.php');
exit();
?>
