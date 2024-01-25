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

</body>
</html>