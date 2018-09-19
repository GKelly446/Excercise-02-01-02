<!doctype html>

<html>
	<head>
		<title>Gas Prices</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
	    <h2>Gas Prices</h2>
	    <?php
            $gasPrice = 2.50;
            if ($gasPrice >= 2 and $gasPrice <= 3) {
                    echo "<p>Gas prices are between $2.00 and $3.00.</p>";
                } else {
                echo "<p>Gas prices are not between $2.00 and $3.00.</p>";
            }
        ?>
	</body>
</html>