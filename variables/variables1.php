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

    <section>
        <h2>Data Types</h2>
        <p>PHP supports the following data types:</p>
        <ol>
            <li>String</li>
            <li>Integer</li>
            <li>Float</li>
            <li>Boolean</li>
            <li>Array</li>
            <li>Object</li>
            <li>NULL</li>
            <li>Resources</li>
        </ol>
    </section>

    <section>
        <h2>Get the Type</h2>
        <p>To get the data type of a variable, use the <b>var_dump()</b> function.</p>
        <?php
        $x = 5;
        var_dump($x);
        var_dump(5);
        var_dump("John");
        var_dump(3.14);
        var_dump(true);
        var_dump([2, 3, 56]);
        var_dump(NULL);
        ?>
    </section>

    <section>
        <h2>Assign String to a Variable</h2>
        <p>Assigning a string to a variable is done with the variable name followed by an equal sign and the string:</p>
        <?php
        # Assign Signle Value
            $x = 5;
            echo $x;
        # Assign Multiple Values
            echo "<br>";
            $x = $y = $z = "Fruit";
            echo $x;
            echo "<br>";
            echo $y;
            echo "<br>";
            echo $z;
        ?>
    </section>
</body>

</html>