<?php session_start();
$_SESSION['langue'] = "es";
$monUrl = $_SERVER['HTTP_REFERER'];
header('Location: '. $monUrl);
Exit();
?>