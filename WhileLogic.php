<!doctype html>

<html>
	<head>
		<title>Is Even</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
	    <h2>While Logic</h2>
	    <?php
        
            $counter = 0;
        
            while ($counter < 100) {
                $numbers[] = $counter;
                ++$counter;
            }
            foreach ($numbers as $value) {
                echo $value . "<br>";
            }
        ?>

	</body>
</html>