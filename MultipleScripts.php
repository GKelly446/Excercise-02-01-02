<!doctype html>

<html>

<head>
   
   <!--
      
       Excercise 02-01-02
       Author: Grace Kelly
       Date: 9.10.18
       
       MultipleScripts.php
       
   -->
   
    <title>PHP Environment Info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h1>Php Environment Info</h1>
    <p>
        The PHP code was rendered with PHP version
    <?php
        echo phpversion();
    ?>
    </p>
    <p>
        The HP code was rendered with Zend Engine version
    <?php
        echo zend_version();
    ?>
    </p> PHP's default MIME
    <?php
        echo ini_get("default_mimetype");
    ?>
    <p>
    <?php
        echo ini_get("max_execution_time");
    ?>        
    </p>

</body>

</html>
