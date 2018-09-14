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
        $globalVariable = "global variable";
        
        function scopeExample() {
            $localVariable = "local variable";
            echo "<p>This is a $localVariable</p>";
        }
        
        function globalExample() {
            global $globalVariable;
            echo "<p>This is a $globalVariable</p>";

        }
    
        scopeExample();
        echo "<p>This is a $globalVariable</p>";
        globalExample();
    ?>
    
</body>

</html>