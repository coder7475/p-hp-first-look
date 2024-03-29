<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
    <link rel="stylesheet" href="./../style.css">
</head>

<body>
    <h1 style="text-align: center;">PHP Data Types</h1>
    <h2>PHP Data Types</h2>
    <p>Variables can store data of different types and different data types can do different things.</p>

    <p>PHP supports the following data types:</p>

    <ol>
        <li>String</li>
        <li>Integer</li>
        <li>Float (double)</li>
        <li>Boolean</li>
        <li>Array</li>
        <li>Object</li>
        <li>NULL</li>
        <li>Resources</li>
    </ol>

    <section>
        <h2>Getting the Data Type</h2>
        <p>Get data type of any object by using the
            <strong>var_dump()</strong> function.
        </p>
        <h4>Example</h4>
        <p>The
            <strong>var_dump()</strong>
            function returns the data type and the value:

        </p>
        <?php
        $x = 5;
        var_dump($x);

        ?>
    </section>

    <section>
        <h2>PHP String</h2>
        <p>A string is a sequence of characters, like "Hello World".</p>
        <p>A string can be any text inside quotes. Quotes can be single or double quotes:</p>
        <?php 
        $x = "Hello World!";
        $y = 'Hello world!';
        var_dump($x);
        echo "<br>";
        var_dump($y);        
        ?>
    </section>

    <section>
        <h2>PHP Integer</h2>
        <p>An integer data type is a non-decimal number between /section>
            -2,147,483,648 and 2,147,483,647
        </p>
        <p>Rules for integers:</p>
        <ul>
            <li>An integer must have at least one digit.</li>
            <li>An integer must not have a decimal point</li>
            <li>An integer can be either positive or negative</li>
            <li>Integers can be specified in:
                <ol>
                    <li>decimal (base 10)</li>
                    <li>hexadecimal (base 16)</li>
                    <li>octal (base 8)</li>
                    <li>binary (base 2)</li>
                </ol>
                notation.
            </li>
        </ul>
       <p>Data Type:</p>
        <?php 
        $x = 5985;
        var_dump($x);
        ?>
    </section>

    <section>
        <h2>PHP Float</h2>
        <p>A float is a number with decimal point or a number in exponential form.</p>
        <p>In the following example 
            <strong>$x</strong> is a float.
            <br>
            The PHP <strong>var_dump()</strong>function
            returns the data type and value: 
            <br>
            <?php 
            $x = 10.354;
            var_dump($x);
            ?>
        </p>
    </section>

    <section>
        <h2>PHP Boolean</h2>
        <p>A Boolean represents two possible states:
            <strong>TRUE</strong> or <strong>FALSE</strong>
        </p>
        <h3>Example</h3>
        <?php 
        $x = true;
        var_dump($x);
        ?>
        <p>Booleans are often used in conditional testing.</p>
    </section>

    <section>
        <h2>PHP Array</h2>
        <p>An array stores multiple values in one single variable.</p>
        <p>In the following example 
            <strong>$cars</strong> is an array. The PHP <strong>var_dump()</strong>
            function returns the data type and value:
        </p>
        <?php 
        $cars = array("Volvo", "BMW", "Toyota");
        echo $cars[0] . "<br>";
        var_dump($cars);
        ?>
    </section>

    <section>
       <h2>PHP NULL Value</h2>
       <p>Null is a special data type which can have only one value: NULL</p>
       <p>A variable of data type NULL is a variable that has no value assigned to it.</p>
       <p>
        <strong>Tip:</strong> If a variable is created without a value, it is automatically assigned a value of NULL.
       </p>
       <p>Variable can also be emptied by setting the value to NULL</p>
       <?php 
       $m = "Hello world!";
       var_dump($m);
       echo "<br>";
       $m = null;
       var_dump($m);
       ?>
    </section>

    <section>
       <h2>Change Data Type</h2> 
       <p>Assigning an integer value to a variable, the type will automatically be an integer.</p>
       <p>If you assign a string to the same variable, the type will change will change to a string:</p>
       <?php 
       $x = 5;
       var_dump($x);
       $x = "Hello";
       var_dump($x);
       ?>
       <h2>Type Casting</h2>
       <p>Changing by type casting:</p>
       <?php 
       $x = 5;
       $x = (string) $x;
       var_dump($x);
       ?>
    </section>
</body>

</html>