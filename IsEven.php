<!doctype html>

<html>
	<head>
		<title>Is Even</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Is Even</h2>
        <?php
            $numbersArray = array(1,2,3,4,5,6,7,8,9,10);
             echo "$numbersArray[0] ", ( $numbersArray[0] % 2 ==0) ? "is an even number<br>" : "is an odd number<br>";
             echo "$numbersArray[1] ",( $numbersArray[1] % 2 ==0) ? "is an even number<br>" : "is an odd number<br>";
             echo "$numbersArray[2] ",( $numbersArray[2] % 2 ==0) ? "is an even number<br>" : "is an odd number<br>";
             echo "$numbersArray[3] ",( $numbersArray[3] % 2 ==0) ? "is an even number<br>" : "is an odd number<br>";
             echo "$numbersArray[4] ",( $numbersArray[4] % 2 ==0) ? "is an even number<br>" : "is an odd number<br>";
             echo "$numbersArray[5] ",( $numbersArray[5] % 2 ==0) ? "is an even number<br>" : "is an odd number<br>";
             echo "$numbersArray[6] ",( $numbersArray[6] % 2 ==0) ? "is an even number<br>" : "is an odd number<br>";
             echo "$numbersArray[7] ",( $numbersArray[7] % 2 ==0) ? "is an even number<br>" : "is an odd number<br>";
             echo "$numbersArray[8] ",( $numbersArray[8] % 2 ==0) ? "is an even number<br>" : "is an odd number<br>";
             echo "$numbersArray[9] ",( $numbersArray[9] % 2 ==0) ? "is an even number<br>" : "is an odd number<br>";
        
        ?>
	</body>
</html>