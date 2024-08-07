<?php
session_start();
session_destroy();
$url = 'admin_login.php';
header('Location: ' . $url);

?>