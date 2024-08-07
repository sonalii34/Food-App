<?php
session_start();
session_destroy();
$url = 'owner_login.php';
header('Location: ' . $url);

?>