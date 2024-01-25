<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro</title>
    <link rel="stylesheet" href="./../style.css">
</head>
<body>
    <h1>My first PHP page</h1>

    <?php
    // this is single line comment
    // echo "Hello World!<br>"; // outputs a greeting
    echo "Welcome Home!";
    ?>


    <?php
    # This is also a single-line comment
    echo "<br>";
    $txt = "PHP";
    echo "I love $txt!";
    echo "<br>";
    echo "<br>Version: ";
    echo phpversion();
    echo "<br>";
    echo "<br>";
    ?>

    <?php
    /**
     * This is a 
     * multi-line comment
     */
    $color = "red";
    echo "My car is " . $color . "<br>";    
    ?>

    <?php
    echo "<br>";
    $x = 5 /*+ 15*/ + 5;
    $y = "green gems!";
    echo $x . " " . $y;
    ?>

    <?php
    echo "<br>";
    $txt = "W3Schools.com";
    echo "I love $txt" . "!";
    echo "<br>";
    echo "I love " . $txt . "!";
    echo "<br>";
    $x = 5;
    $y = 4;
    echo $x + $y;
    echo "<br>";
    // find variables
    var_dump($x);
    var_dump($x);
    echo "<br>";
    var_dump($txt);
    echo "<br>";    
    ?>

</body>

</html>