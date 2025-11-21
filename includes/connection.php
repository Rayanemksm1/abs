<?php
$host = "sql310.infinityfree.com";
$user = "if0_40474606";
$pass = "ohkUeUgjv97";  
$db   = "if0_40474606_constructionstore";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Erreur de connexion MySQL : " . mysqli_connect_error());
}
?>
