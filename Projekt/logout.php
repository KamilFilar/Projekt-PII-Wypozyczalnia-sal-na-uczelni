<?php
session_start();
$_SESSION['islogin'] = 'false';	
header('Location: strona_glowna.php');
?>