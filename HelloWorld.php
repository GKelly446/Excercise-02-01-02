<!doctype html>

<html>

<head>
   
   <!--
      
       Excercise 02-01-02
       Author: Grace Kelly
       Date: 9.11.18
       
       HelloWorld.php
       
   -->
   
    <title>Hello World</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <?php 
    $worldVar = "world";
    $sunVar = "sun";
    $moonVar = "Moon";
    #$worldInfo = 92897000;
    define("WORLD_INFO", 92897000 );
    #$sunInfo = 72000000;
    define("SUN_INFO", 72000000 );
    #$moonInfo = 3456;
    define("MOON_INFO", 3456 );
        
    echo "<p> Hello $worldVar!<br>";
    echo "The $worldVar is " , number_format(WORLD_INFO, 0), " miles from the $sunVar. <br>";
    echo "Hello, ", $sunVar, "!<br>";
    echo "The $sunVar's core teperature is approximately ", number_format(SUN_INFO, 2), " degrees Fahrenheit.<br>";
    echo "Hello, ", $moonVar, "!<br>";
    echo "the $moonVar is ", number_format(MOON_INFO, 0), " miles in diameter.</p>";
    
    ?>
    
</body>

</html>