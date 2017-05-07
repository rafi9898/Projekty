<?php

$cfg['db_server'] = 'localhost'; // Serwer bazy danych
$cfg['db_user'] = 'root'; // Nazwa użytkownika
$cfg['db_pass'] = ''; // Hasło
$cfg['db_name'] = 'users'; // Nazwa bazy danych


// POŁĄCZ Z BAZĄ DANYCH
$conn = @mysql_connect ($cfg['db_server'], $cfg['db_user'], $cfg['db_pass']);
$select = @mysql_select_db ($cfg['db_name'], $conn);

if (!$conn) {
    die ('<p class="error">Nie udało się połączyć z bazą danych.</p>');
}

if (!$select) {
    die ('<p class="error">Nie udało się wybrać bazy danych.</p>');
}
       
?>
