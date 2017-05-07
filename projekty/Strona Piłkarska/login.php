<?php
    
session_start();

//Połączenie z bazą

$db = mysqli_connect("localhost", "root", "", "users");

if (isset($_POST['zaloguj'])) {
    
    $username = mysql_real_escape_string($_POST['login']);
    $password = mysql_real_escape_string($_POST['password']);
    
    $password = md5($password);
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $sql);
    
    if (mysqli_num_rows($result) == 1) {
        
        $_SESSION['message'] = "Logowanie przebiegło pomyślnie!";
        $_SESSION['message'] = $username;
        header("location: home.php");
    } else {
        
        $_SESSION['message'] = "Login lub Hasło jest niepoprawne!";
    }
}


?>