<?php

session_start();   
session_destroy();
unset($_SESSION['username']);
$_SESSION['message'] = "Zostałeś Wylogowany!";
header("location: index.html");

?>