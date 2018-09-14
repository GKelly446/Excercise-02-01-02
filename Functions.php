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
 
  <h2>Passing Paramters</h2>
  
   <?php 
        
    function incrementByValue($countByValue) {
       ++$countByValue;
        echo "<p>incrementByValue() value is $countByValue</p>";
    }
    
    function incrementByReference(&$countbyReference) {
       ++$countbyReference;
        echo "<p>incrementByReference value is $countbyReference</p>";
    }
    
    // main program 
    $count = 1;
    echo "<p>Main program starting value is $count.</p>";
    incrementByValue($count);
    echo "<p>Main program after incrementByValue() is $count.</p>";
    
    $count = 1;
    echo "<p>Main program starting value is $count.</p>";
    incrementByReference($count);
    echo "<p>Main program after incrementByReference() is $count.</p>";
    
    ?>
    
    <!--   default arguments-->
    <h2>Default Arguments</h2>
    <?php
    //passing the color by value
    function paint($room="office", $color="red") {
        return "<p>The color of the {$room} is {$color}</p>";
    }
    
    //echo paint("blue");
    echo paint();
    echo paint("bedroom", "blue");
    echo paint("bedroom", null);
    echo paint("bedroom");
    echo paint("blue");

    ?>
    
</body>

</html>