<!doctype html>

<html>
	<head>
		<title>Interest Array</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>

	</head>

	<body>
	    <h2>Interest Array</h2>
	    <?php
        // variables declaring the values that will be in array $ratesArray
        $interestRate1 = .0725;
        $interestRate2 = .0750;
        $interestRate3 = .0775;
        $interestRate4 = .0800;
        $interestRate5 = .0825;
        $interestRate6 = .0850;
        $interestRate7 = .0875;
        
        // array listing all the variable names hosting the rate values
        $ratesArray = array($interestRate1, $interestRate2, $interestRate3, $interestRate4, $interestRate5, $interestRate6, $interestRate7);
        
        // lists the variable values. 
        echo number_format($ratesArray[0], 4), "<br>";
        echo number_format($ratesArray[1], 4), "<br>";
        echo number_format($ratesArray[2], 4), "<br>";
        echo number_format($ratesArray[3], 4), "<br>";
        echo number_format($ratesArray[4], 4), "<br>";
        echo number_format($ratesArray[5], 4), "<br>";
        echo number_format($ratesArray[6], 4), "<br>";
        ?>
	</body>
</html>