<?php session_start();
$_SESSION['langue'] = "en";
$monUrl = $_SERVER['HTTP_REFERER'];
header('Location: '. $monUrl);
Exit();
?>