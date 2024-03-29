<?php

session_start();
//Połączenie z bazą
$db = mysqli_connect("localhost", "root", "", "users");

if (isset($_POST['rejestruj'])) {
    session_start();
    $username = mysql_real_escape_string($_POST['username']);
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['haslo1']);
    $password2 = mysql_real_escape_string($_POST['haslo2']);
    
    if ($password == $password2){
        
        //Stworzenie użytkownika
        $password = md5($password);
        $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
        mysqli_query($db, $sql);  
        $_SESSION['message'] = "Zostałeś zalogowany pomyślnie!";
        $_SESSION['username'] = $username;
        header("location: home.php");
    } else {
        
        $_SESSION['message'] = "Podane hasła nie są takie same!";
    }
}
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Strona poświęcona rozgrywką piłkarskim. Udostępniony strumień w czasie rzeczywistym z aktualnym meczem.">
    <meta name="keywords" content="piłka nożna, mecze, rozgrywki, piłkarskie, stream, na żywo">
    <meta name="author" content="Rafał Podraza">
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://content.jwplatform.com/libraries/mnKb8Z0X.js"></script>
    <link rel="stylesheet" href="css/fontello.css" type="text/css" />
    <link rel="stylesheet" href="animate.css" type="text/css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="jwplayer/jwplayer.js"></script>
    <script>jwplayer.key="UcxdaYG9KIMk2WkNNzO1CA/7V7rPQ2qzS4mG2g==";
    </script>
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Revalia" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <title>MY SPORT</title>
</head>
    <body>
        
        <!--Preloader-->
        <div id="preloader">
            <div id="status"></div>
        </div>
        
        
        <div id="container">
            <div id="nav">
                <a href="index.html"><img src="img/logo.png" alt="Logo" class="left" /></a>
                <ol>
                    <li><a class="active" href="index.html">STRONA GŁÓWNA</a></li>
                    <li><a class="pick1">OGLĄDAJ ↓</a></li>
                    
                    <div class="pick">
                        
                            <a href="stream.php"><img class="real" src="img/real-madrid.png" alt="Logo Real Madrid przezroczyste"></a>
                
                            <a href="stream.php"><img class="barca" src="img/barcelona.png" alt="Logo Barcelona przezroczyste"></a>
                        
                            <a href="stream.php"><img class="Bayern" src="img/Bayern.png" alt="Logo Bayern"></a>
                        
                            
            
                       
                    </div>
                    <li><a class="anim" href="timetable.php">PROGRAM</a></li>
                </ol>

                
                <ol class="login">
                    <li><a class="backgl login-up" href="#">ZALOGUJ</a></li>
                    <li><a class="backg" href="register.php">ZAREJESTRUJ</a></li>
                </ol>
                <div id="nav-icon">
    <span><i class="fa fa-bars"></i></span>
</div>
 
<div class="left-menu">
    <ul>
        <li>
            <a href="index.html" target="_blank">Strona Główna</a>
        </li>
        <li>
            <hr>
        </li>
        <li>
            <a href="stream.php" target="_blank">Oglądaj</a>
        </li>
        <li>
            <hr>
        </li>
        <li>
            <a href="timetable.php" target="_blank">Program</a>
        </li>
            <li>
                <hr>
            </li>
        <li>
            <a class="login-up" href="#">Zaloguj</a>
        </li>
            <hr>
        <li>
            <a href="register.php">Zarejestruj</a>
        </li>
        
</div>
            </div>             
                              
     <div class="section2 register-form">
                <div class="hstream">
                    <h1 class="register-h1">Zarejestruj się!</h1>
                    <div class="register-style">
                    <form method="post" enctype="multipart/form-data" action="register.php">
                    <p>Login: <input type="text" name="username" required></input></p>
                    <p>E-mail: <input type="text" name="email" required></input></p>
                    <p>Hasło: <input type="password" name="haslo1" required></input></p>
                    <p>Powtórz Hasło: <input type="password" name="haslo2" required></input></p>
                    <label><p><input type="checkbox" name="regulamin" required> Akcetpuje Regulamin!</p></label>
                    <p><input type="submit" name="rejestruj" value="Zarejestruj Się!"></p>
                    </form>
                </div>
                </div>
                
</div>
         
         <div id="disqus_thread"></div>
                    
                 
         <div class="login-push">
                    
                    <img class="cancel-icon" src="img/cancel-icon.png" alt="Cancel-Icon">
                    
                    <h1>Zaloguj się!</h1>
                    
                    <form>
                
                        <input type="text" name="login" placeholder="Login" onfocus="this.placeholder=''" onblur="this.placeholder='Login'">
                        <input type="password" name="password" placeholder="Hasło" onfocus="this.placeholder=''" onblur="this.placeholder='Hasło'">
                        <input type="submit" name="zaloguj" value="Zaloguj się!">
                
                    </form>
                </div>
                
                </div>
                    
                    
                </div>
                    
                    
                </div>
            </div>
            
            <div id="footer">
                <div class="footerline">
                <ol>
                    <li><a href="index.html#informacje">O Stronie</a></li>    
                    <li><a href="register.php">Rejestracja</a></li>    
                    <li><a href="#">Regulamin</a></li>    
                    <li><a href="#">Kontakt</a></li>    
                </ol>
                </div>
                <p>&copy 2017 COPYRIGHT WSZYSTKIE PRAWA ZASTRZEŻONE.</p>
            </div>
        </div>

        
        <!--Wysuwane Menu-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="sliiide.min.js"></script>
        <script>
            $('.left-menu').sliiide({place: 'right', toggle: '#nav-icon'});
        </script>
        
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
            <script src="jquery.viewportchecker.min.js"></script>

            <script>
                $(document).ready(function(){

                });
        </script>
        
        <script type="text/javascript">
(function($) {
    $(window).load(function() { // czekamy, aż załaduje się cała strona
	$('#status').fadeOut(); // efekt zanikania animowanej grafiki
	$('#preloader').delay(350).fadeOut('slow'); // efekt zanikania warstwy zakrywającej stronę
	$('body').delay(350).css({'overflow':'visible'}); // dopóki nasz div#preloader jest widoczny nie ma możliwości przewijania strony 
    });
})(jQuery)
</script>
    </body>
</html>