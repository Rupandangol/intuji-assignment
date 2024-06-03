<?php
session_start();
unset($_SESSION['google_access_token']);
header('Location: index.php');
?>