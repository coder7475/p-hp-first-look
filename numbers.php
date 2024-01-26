<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
    <link rel="stylesheet" href="./../style.css">
</head>

<body>
    <h1>PHP Numbers</h1>
    <p>There are three main numeric types in PHP:</p>
    <ul>
        <li>Integer</li>
        <li>Float</li>
        <li>Number Strings</li>
    </ul>
    <p>There are two more data types used for numbers:</p>
    <ul>
        <li>Infinity</li>
        <li>NaN</li>
    </ul>
    <h5>PHP Examples:</h5>
    <?php
    $a = 5;
    $b = 5.32;
    $c = "25";

    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    ?>
    <h2>PHP Integers</h2>
    <p>2, 256, -256, 10358, -179567 are all integers.</p>
    <p>An Integer is a number without any decimal part.</p>

    <p>Rules for integer:</p>
    <ul>
        <li>An integer must have at least one digit</li>
        <li>An integer must NOT have a decimal point</li>
        <li>An integer can be either positive or negative</li>
        <li>Integer has three formats:
            <ul>
                <li>Decimal (10-based)</li>
                <li>Hexadecimal (16-based - prefix with Ox) </li>
                <li>Octal (8-based - prefix with O)</li>
            </ul>
        </li>
    </ul>

    <p>PHP has the following predefined constants for integers:</p>
    <ul>
        <li>
            <strong>PHP_INT_MAX</strong> - The largest integer supported
        </li>
        <li>
            <strong>PHP_INT_MIN</strong> - The smallest integer supported
        </li>
        <li>
            <strong>PHP_INT_SIZE</strong> - The size of an integer in bytes
        </li>
    </ul>

    <p>PHP has the following functions to check if the type of a variable is integer:</p>
    <ul>
        <li><strong>is_int()</strong></li>
        <li><strong>is_integer()</strong> - alias of <strong>is_int()</strong></li>
        <li><strong>is_long()</strong> - alias of <strong>is_int()</strong></li>
    </ul>
    
    <h5>PHP Examples</h5>
    <?php 
    $x = 5985;
    var_dump(is_int($x));
    var_dump(is_integer($x));
    var_dump(is_long($x));
    ?>
</body>

</html>