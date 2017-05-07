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
                              
     <div class="section2">
                <div class="hstream"><h1>Juventus - Real Madryt</h1></div>
                <div class="texts2 table1">
                    
                    <div class="progress1"><progress id="prog1" value="30" max="100">30% vs 70%</progress></div>
                    
                    
                <p><div class="player-stream">
                <div id="myElement"></div>
                <script>
      var playerInstance = jwplayer("myElement");
      playerInstance.setup({
      image: "http://content.jwplatform.com/thumbs/qXS1oind-1280.jpg",
      width: "100%",
      aspectratio: "16:9",
      sources: [{
        file: "http://content.jwplatform.com/videos/qXS1oind-JtBrAYOi.mp4",
        label: "720p HD"
      },{
        file: "http://content.jwplatform.com/videos/qXS1oind-mXAaqNQX.mp4",
        label: "406p SD",
        "default": "true"
      },{
        file: "http://content.jwplatform.com/videos/qXS1oind-cCMX70i5.mp4",
        label: "180p Web"
      }]
    });
</script>
</div></p>
         
         <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://sportslivecom.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    
                 
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