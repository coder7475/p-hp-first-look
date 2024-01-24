<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <link rel="stylesheet" href="./../style.css">
</head>

<body>
    <h1>PHP echo and print Statements</h1>
    <p>
        Two basic ways to get output:
    <ul>
        <li><strong>echo</strong></li>
        <li><strong>print</strong></li>
    </ul>
    </p>

    <section>
        <h2>The PHP echo Statement</h2>
        <p>
            The <strong>echo</strong> statement can be used with or without parentheses:
        <ul>
            <li>echo</li>
            <li>echo()</li>
        </ul>
        </p>

        <h3>Display Text</h3>
        <h5>PHP Example</h5>

        <?php
        echo "<h6>PHP is Fun!</h6>";
        echo "Hello World!<br>";
        echo "This ", "string", "was ", "made ", "with multiple parameters.";
        ?>

        <h3>Display Variables</h3>
        <?php
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        $x = 5;
        $y = 4;
        echo "<p>" . $txt1 . "</p>";
        echo "Study PHP at " . $txt2 . "<br>";
        echo $x + $y;
        ?>
    </section>

    <section>
        <h2>The PHP print Statement</h2>
        <p>The
            <strong>print</strong>
            statement can be used with or without parentheses:
        <ul>
            <li>print</li>
            <li>print()</li>
        </ul>
        <h4>Display Text</h4>
        <h5>PHP Example</h5>
        <?php
        print "Using print to output text!<br>";
        print "Hello world!<br>";
        print "I'm about to learn PHP!";
        ?>
        </p>

        <h4>Display Variables Using print</h4>
        <?php 
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        $x = 5;
        $y = 4;

        print "<h2>" . $txt2 . "</h2>"; 
        print "Study PHP at". $txt2 ."<br>";
        print $x + $y;
        ?>
    </section>

    <section></section>
</body>

</html>