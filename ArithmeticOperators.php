<!doctype html>

<html>

<head>
   
   <!--
      
       Excercise 02-01-02
       Author: Grace Kelly
       Date: 9.11.18
       
       ArithmeticOperators.php
       
   -->
   
    <title>Hello World</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <?php 
        echo "<h1> Arithemetic Operations</h1>";
        // addition
        $x = 100;
        $y = 200;
        $returnValue = $x + $y;
        echo "<h2>Addition</h2>";
        echo '<p>$returnValue after addition expression: ', $returnValue, "</p>";
    
        // subtraction
        $x = 10;
        $y = 7;
        $returnValue = $x - $y;
        echo "<h2>Subtraction</h2>";
        echo '<p>$returnValue after subtraction expression: ', $returnValue, "</p>";
    
        // division
        $x = 24;
        $y = 3;
        $returnValue = $x / $y;
        echo "<h2>Division</h2>";
        echo '<p>$returnValue after division expression: ', $returnValue, "</p>";
    
        // modulus
        $x = 24;
        $y = 3;
        $returnValue = $x % $y;
        echo "<h2>Modulus</h2>";
        echo '<p>$returnValue after modulus expression: ', $returnValue, "</p>";
    
        // unary
        echo "<h2> Unary increment: Prefix Notation</h2>";
        $studentID = 100;
        $curStudentID = ++$studentID;
        echo "The first student Id is: ", $curStudentID, "</br>";
            //changing the prefix ++ changes the operation before it uses the variable, postfix operation does the operation after it used the variable. 
    
        echo "<h1> Assignment Operators</h1>";
        $number = 100;
        $number += 50;
        echo '$number: ', $number;
    
        echo "<h1> Conditional Operators</h1>";
        $value1 = "First text string";
        $value2 = "Second text string";
        $returnValue = ($value1 == $value2) ? "true" : "false";
        echo '$returnValue is: ', $returnValue;


    ?>
    
</body>

</html>