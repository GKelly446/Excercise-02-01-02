<!doctype html>

<html>
	<head>
		<title>Days Array</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>

	</head>

	<body>
	    <h2>Days Array</h2>
	    <?php
            $day = 0;
            // english days of the week
            $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
            echo "The days of the week in English are: ", "<br>", $days[$day++], "<br>", $days[$day++], "<br>", $days[$day++], "<br>", $days[$day++], "<br>", $days[$day++], "<br>", $days[$day++], "<br>", $days[$day++], "<br>"; 
            
            // french days of the week
            $day = 0;
            $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
            echo "<br>The days of the week in French are: ", "<br>", $days[$day++], "<br>", $days[$day++], "<br>", $days[$day++], "<br>", $days[$day++], "<br>", $days[$day++], "<br>", $days[$day++], "<br>", $days[$day++];
            
        ?>
	</body>
</html>