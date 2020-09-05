<?php

    session_start();
    if(!isset($_SESSION['email']))
    {
        header("location: index.php");
    }

?>


<!DOCTYPE html>
<html lang="en" onclick="jump()">
    <head>
        <meta charset="UTF-8">
        <meta name ="viewport" content="width=device-width, intial-scale=1.0">
        <title>Save the Drago!</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        
        
        <div class="container">
           
           
            <div class="rain">
                <button><a class="exit" href="index.php">Logout</a></button>
    
      
            
            <div class="welcome">Welcome <?php echo $_SESSION['username'] ?></div>
            <div class="gameOver">Game Over!</div>
            <div id="scoreid">Your Score: 0</div>
           
            
            
            </div>
            
            <div class="dino"></div>
    
            <div class="zom obstacleanim"></div>
            
        </div>
        
        
        </div>
    </body>
</html>