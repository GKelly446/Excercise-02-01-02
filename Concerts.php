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
    <h1> Central Valley Civic Center</h1>
    <h2> Summer Concert Season </h2>

   <?php 
    $concerts = array("Jimmy Buffet", "Christ Isaak", "Bonnie Raitt", "James Taylor", "Alicia Keys");
    $concerts[] = "Bob Dylan";
    $concerts[] = "Ryan Cabrera";
    
    echo "<p>the following ", count($concerts), " concerts are scheduled:</p><p>";
    echo "$concerts[0]</br>";
    echo "$concerts[1]</br>";
    echo "$concerts[2]</br>";
    echo "$concerts[3]</br>";
    echo "$concerts[4]</br>";
    echo "$concerts[5]</br>";
    echo "$concerts[6]</br>";
    
    echo "<pre>";
    print_r($concerts);
    echo "</pre>";
    
    echo "<pre>";
    var_dump($concerts);
    echo "</pre>";

    ?>
    
</body>

</html>