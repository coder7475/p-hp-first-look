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
        <p>A variable declared outside a function has <i>Global Scope</i> and can only be accessed outside a function.
        </p>
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
        <p>A variable declared <strong>within</strong> a function has a <i>Local Scope</i> and can only be accessed
            within that function.</p>
    </section>

    <h5>PHP exmaple</h5>
    <?php
    function localTest()
    {
        $y = 5; // local scope
        echo "<p>Variable x is inside function is: $y</p>";
    }
    localTest();
    // using y outside the function will generate an error
    // echo "<p>Variable y is outside function is: $y</p>";  
    ?>

    <section>
        <h2>PHP The global Keyword</h2>
        <p>The <i>global</i> Keyword is used access global variable from within a function. To do this, use the global
            keyword before the variable(inside a function).</p>
    </section>

    <h5>PHP example</h5>
    <?php
    $m = 5;
    $n = 10;

    function globalTest()
    {
        global $m, $n;
        $n = $m + $n;
    }
    globalTest();
    echo "Accessing n from within a function $n";
    ?>

    <h3>$GLOBAL[index]</h3>
    <p>PHP also stores all global variables in an array called <i>$GLOBAL[index]</i>. The <i>index</i> holds the name of
        the variable. This is also accessible from within functions and can be used to update global variables direcly.
    </p>

    <h5>PHP example</h5>
    <?php
    $p = 5;
    $q = 10;

    function globalCall()
    {
        $GLOBALS['q'] = $GLOBALS['p'] + $GLOBALS['q'];
    }

    echo $q;
    echo "<br>";
    globalCall();
    echo $q;

    ?>

    <section>
        <h2>PHP The static Keyword</h2>
        <p>The <i>static</i> Keyword is used before a variable to keep the value of a local variable in memory. Because normally when a function is completed/executed, all of its variables are deleted.</p>
    </section>

    <h5>PHP example</h5>
    <?php 
    function staticCall() {
        static $x = 0;
        echo $x;
        $x++;
    }

    staticCall();
    echo "<br>";

    staticCall();
    echo "<br>";

    staticCall();
    echo "<br>";

    ?>
</body>

</html>