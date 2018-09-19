<!doctype html>

<html>
	<head>
		<title>Odd Numbers</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
	    <h2>Odd Numbers</h2>
	    <?php
        
        $counter = 0;
        
        while($counter <= 100) {
            ++$counter;
            echo $counter . "<br>";

        }
        
        ?>

	</body>
</html>