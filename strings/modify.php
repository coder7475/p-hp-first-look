<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Strings</title>
    <link rel="stylesheet" href="./../style.css">
</head>
<body>
    <h1>PHP - Modify Strings</h1>
    <p>PHP has a set of built in functions to modify strings.</p>

    <section>
        <h2>Upper Case</h2>
        <p>The <strong>strtoupper()</strong> function returns the string in upper case:</p>
        <?php 
        $x = "Hello World!";
        echo strtoupper($x);
        ?>
        <h2>Lower Case</h2>
        <p>The <strong>strtolower()</strong> function returns the string in lower case:</p>
        <?php 
        $x = "Hello World!";
        echo strtolower($x);
        ?>
    </section>

    <section>
        <h2>Replace String</h2>
        <p>The PHP <strong>str_replace()</strong> function replaces some characters with some other characters in a string.</p>
        <h5>Example</h5>
        <?php 
        echo "Replace the text 'World' with 'Dolly': ";
        echo str_replace("World", "Dolly", $x);
        ?>
    </section>

    <section>
        <h2>Reverse a String</h2>
        <p>The PHP <strong>strrev()</strong> function reverses a string.</p>
        <h5>Example</h5>
        <?php 
        echo "Reverse of $x: ";
        echo strrev($x);
        ?>
    </section>

    <section>0
        <h2>Remove WhiteSpace</h2>
        <p>Thr trim() removes any whitespace from the begining or the end:</p>
        <?php 
        $x = " Hello World! ";
        echo trim($x);
        ?>
    </section>

    

    <section>
        <h2>Convert String into Array</h2>
        <p>The PHP <strong>explode(seperator, string)</strong> function splits a string into an array.</p>
        <p></p>
        <?php 
        $x = "Hello World!";
        // echo $x;
        $y = explode(" ", $x);
        print_r($y);
        ?>
    </section>


</body>
</html>