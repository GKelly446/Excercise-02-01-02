<!doctype html>

<html>
	<head>
		<title>Temp Conversion</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
	    <h2>Temp Conversion</h2>
	    <?php
        
        $count = 0;
        
        while ($count <= 100) {
                ++$count;
        
        $convert = ($count - 32) * 5/9;
        print"$count $convert<br>";
        }
       
        ?>
	</body>
</html>