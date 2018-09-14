<!doctype html>

<html>

<head>
   
   <!--
      
       Excercise 02-01-02
       Author: Grace Kelly
       Date: 9.11.18
       
       HelloWorld.php
       
   -->
   
    <title>Dice Roll</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
 
  <h2>Dice Roll</h2>
  
   <?php
      // arrays used for rolls & double rolls 
      $faceNamesSingular = array("one", "two", "three", "four", "five", "six");
      $faceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");
      $doublesCount = 0;
      $rollNumber = 1;
      define("NBR_ROLLS", 4);
    
      // function that displays double rolls in a certain format
      function checkForDoubles($die1, $die2) {
          global $faceNamesSingular;
          global $faceNamesPlural;
          echo "Die 1: $die1 <br> Die 2: $die2 <br>";
          
          if ($die1 === $die2) {
              echo "The roll was double ", $faceNamesPlural[$die1 - 1], ".<br>";
              $returnValue = true;
          }
          else {
              echo "The roll was a ", $faceNamesSingular[$die1 - 1], " and a ", $faceNamesSingular[$die2 - 1], ".<br>";
              $returnValue = false;
          }
          return $returnValue;
      }
    
      // function that displays scores
      function displayScoreText($score, $doubles) {
        
        if ($doubles) {
            switch ($score) {
                case 2: {
                    echo "You rolled snake eyes!<br>";
                    break;
                }
                case 12: {
                    echo "You rolled boxcars!<br>";
                    break;
                }
            }
        }
        else {
        
          if ($score === 3) {
              echo "You rolled loose deuce!<br>";
          }
          else if ($score === 5) {
              echo "You rolled a fever 5!<br>";
          }
          else if ($score === 7) {
              echo "You rolled a natural!<br>";
          }
          else if ($score === 9) {
              echo "You rolled a nina!<br>";
          }
          else if ($score === 11) {
              echo "You rolled a yo!<br>";
          }
          else {
              echo "Your roll has no nickname.<br>";
          }
            
        }
              
      }
        
      $dice = array();
      while ($rollNumber <= 5) {
           $dice[0] = rand(1,6);
           $dice[1] = rand(1,6);
           echo "<p>";
           $score = $dice[0] + $dice[1];
           echo "The total score for the role was $score.<br>";
           $doubles = checkForDoubles($dice[0], $dice[1]);
           displayScoreText($score, $doubles);
           echo "</p>";  
           if ($doubles) {
               ++$doublesCount;
           }
           ++$rollNumber;
      }
      echo "<p>Doubles occurred on $doubles of the " . NBR_ROLLS . " rolls</p>";
    
    ?>
    
</body>

</html>