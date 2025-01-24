<?php
$servername = "localhost" ;
$username = "root" ;
$password = "";
$dbname = "jour08"

$mysqli = new mysqli($servername, $username, $password, $dbname);

$query = $mysqli -> query("SELECT * FROM etudiants");
$etudiants = $query -> fetch_all(MYSQLI_ASSOC);

$mysqli -> close();
?>

