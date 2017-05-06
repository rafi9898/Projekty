<?php

include("config-style.php");

mysql_connect("localhost","root","") or die("Nie udało się nawiązać połączenia z bazą danych");
mysql_select_db("users") or die("Nie można odnaleźć danej bazy danych");

?>