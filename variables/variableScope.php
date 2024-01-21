<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Scope of Variables</title>
</head>

<body>
    <h1>PHP Variables Scope</h1>
    <section>
        <h2>Variable Scope</h2>
        <p>In PHP, variables can be declared anywhere in the script. But the scope of a variable is the part of the
            script
            where the variabel can be <strong>referenced/used.</strong>
        </p>
        <p>PHP has three different variable scopes:</p>
        <ul>
            <li>local</li>
            <li>global</li>
            <li>static</li>
        </ul>
    </section>
    <br>

    <section>
        <h2>Global Scope</h2>
        <p>A variable declared outside a function has <i>Global Scope</i> and can only be accessed outside a function.</p>
    </section>
    <!-- global scope php exmaple -->
    <h5>PHP exmaple</h5>
    <?php
    $x = 5; // global scope
    
    function myTest()
    {
        // using x inside this function will generate an error
        // echo "<p>Variable x is inside function is: $x</p>";
        echo "x can't accessd Inside function!!";
    }

    myTest();
    echo "<p>Variable x is inside function is: $x</p>";
    ?>

    <section>
        <h2>Local Scope</h2>
        <p>A variable declared <strong>within</strong> a function has a <i>Local Scope</i> and can only be accessed within that function.</p>
    </section>

    <h5>PHP exmaple</h5>
    <?php 
    function localTest() {
        $y = 5; // local scope
        echo "<p>Variable x is inside function is: $y</p>";        
    }
    localTest();
    // using y outside the function will generate an error
    // echo "<p>Variable y is outside function is: $y</p>";  
    ?>


</body>

</html>