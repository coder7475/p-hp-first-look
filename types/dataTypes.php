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
</body>

</html>