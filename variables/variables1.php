<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>
    <h1>Variables are "containers" for storing information.</h1>
    <section>
        <h2>Creating (Declaring) PHP Variables</h2>
        <p>In PHP, a variable starts with the <b>$</b> sign, followed by the name of the variable: </p>
        <?php
        # Example 1
        $x = 5;
        $y = "John";

        echo $x;
        echo "<br>";
        echo $y;
        ?>
    </section>
    <section>
        <h2>PHP variables</h2>
        <p>Rules for PHP variables:</p>
        <ul>
            <li>A variable starts with the <b>$</b> sign, followed by the name of the varaibel.</li>
            <li>A variable name must start with a letter or the underscore.</li>
            <li>A variable name can't start with a number.</li>
            <li>A variable can only contain alpha-numeric characters and underscore</li>
            <li>Variable names are <b>case-sensitive</b></li>
        </ul>
    </section>
    <section>
        <h2>PHP is a Loosely Typed Language</h2>
        <p>
            PHP automatically associates a data type to the variable, depending on its value. <br> Since the data types are not set in a strict sense, <br> you can do things like adding a string to an integer without causing an error.
        </p>
    </section>
</body>
</html>