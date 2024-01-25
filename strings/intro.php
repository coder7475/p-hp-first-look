<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strings</title>
    <link rel="stylesheet" href="./../style.css">
</head>
<body>
    <h1 style="text-align: center;">PHP Strings</h1>
    <p>A string is a sequence of characters, like "Hello PHP"</p>

    <section>
        <h2>Strings</h2>
        <p>Strings in PHP are surrounded by either double quotation marks, or single quotation marks.</p>
        <h5>PHP example</h5>
        <?php 
        echo "Hello";
        echo 'Hello';
        ?>
    </section>

    <section>
        <h2>Double Quotes vs Single Quotes in PHP</h2>
        <dl>
            <dt>Double Quotes("___")</dt>
            <dd>Perfom action on special characters.</dd>
            <dt>Single Quotes('___')</dt>
            <dd>Does not perform action on special characters. It returns the string as it is.</dd>
        </dl>

        <?php 
        $x = "John";
        echo "Hello $x";
        echo "<br>";
        echo 'Hello $x';
        ?>
    </section>

    <section>
        <h2>String Length</h2>
        <p>The PHP <strong>strlen()</strong> function returns the length of a string.</p>
        <?php 
        $x = "John";
        print "The length of 'Hello John' string: ";
        echo strlen("Hello $x");
        ?>
    </section>

    <section>
        <h2>Word Count</h2>
        <p>The PHP <strong>str_word_count()</strong> function counts the number of words in a string.</p>
        <?php 
        echo "Count of words in 'Hello World': ";
        echo str_word_count("Hello World!");
        ?>
    </section>
</body>
</html>