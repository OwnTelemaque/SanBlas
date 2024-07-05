<?php session_start();
$_SESSION['langue'] = "fr";
$monUrl = $_SERVER['HTTP_REFERER'];
header('Location: '. $monUrl);
Exit();
?>