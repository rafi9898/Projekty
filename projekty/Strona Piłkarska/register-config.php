<?php

include("connect.php");

$login = $_POST["login"];
$email = $_POST["email"];
$haslo = md5($_POST["haslo"]);

$zapytanie = mysql_query("INSERT INTO users(ID, Login, Email, Hasło) values ('', '$login','$email','$haslo')");

header("Location: home.php");

?>