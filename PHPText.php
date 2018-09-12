<!doctype html>

<html>

<head>
   
   <!--
      
       Excercise 02-01-02
       Author: Grace Kelly
       Date: 9.10.18
       
       PHPText.php
       
   -->
   
    <title>PHP Text</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <p>
    <h3>This is HTML</h3>
    <?php 
    #the difference between echo and print: print can use concatinated comma seperated values and can return a value; echo can not. 
        echo "This text is displayed using standar PHP script delimeters <br> "; 
        print "second string";
        print ("<br>second string");
        echo "<h1>This is a " , "multiple argument string </h1>";
        echo ("<h1>This is a " . "multiple argument string </h1>");
        print ("<h2>This is some math: " . (2 + 3) . "</h2>");

    ?>
    </p>
</body>

</html>
