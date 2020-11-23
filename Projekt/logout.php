<?php
session_start();
$_SESSION['islogin'] = 'false';	
$_SESSION['valueButton']='false';
header('Location: strona_glowna.php');
?>