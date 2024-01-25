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
        <p>The PHP <strong>str_replace()</strong> function replaces some characters with some other characters in a
            string.</p>
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


    <section>
        <h2>String Concatenation</h2>
        <p>To concatenate, or combine, two strings use <strong>.</strong> operator.</p>
        <?php
        $x = "Hello";
        $y = "World";
        $z = $x . " " . $y;
        echo $z;
        echo "<br>";
        $z = "$x $y";
        echo $z;
        ?>
    </section>

    <section>
        <h2>Slicing</h2>
        <p><strong>substr(string, startIndex, numberOfCharacters(length))</strong> - returns a range of characters.</p>
        <?php
        echo substr($z, 6, 5);
        ?>
        <h2>Slice to the End</h2>
        <p>
            <strong>substr(string, startIndex)</strong> without length the range will go to end:

        </p>
        <?php
        echo substr($z, 6);
        ?>
        <h2>Slice <i>From</i> the End</h2>
        <p>Use negative indexes to start the slice from the end of the string: last character has index -1</p>
        <h5>Example</h5>
        <p>Get the 3 characters, starting from the "o" in the world (index -5)</p>
        <?php
        echo substr($z, -5, 4);
        ?>
        <h2>Negative Length</h2>
        <p>Use <i>negative length</i> to specify how many characters to omit, startign from the end of the string:</p>
        <h5>Example</h5>
        <p>Get the characters starting from the "W" in "World"(index 5) and continue until 3 characters from the end.
        </p>
        <?php
        echo substr($z, 5, -3);
        ?>
    </section>

    <section>
        <h2>Escape Characters</h2>
        <p>
            To insert characters that are illegal in a string, use an escape character.
        </p>
        <p>
            An escape character is a backslash \ followed by the character you want to insert.
        </p>
        <?php
        $x = "We are the so-called \"Vikings\" from the north.";
        echo $x;
        ?>

        <h3>Escape Characters</h3>
        <p>List of escape characters:</p>
        <table>
            <tr>
                <th>Code</th>
                <th>Result</th>
            </tr>
            <tr>
                <td>\'</td>
                <td>Single Quote</td>
            </tr>
            <tr>
                <td>\"</td>
                <td>Double Quote</td>
            </tr>
            <tr>
                <td>\$</td>
                <td>PHP variable</td>
            </tr>
            <tr>
                <td>\n</td>
                <td>New Line</td>
            </tr>
            <tr>
                <td>\r</td>
                <td>carriage Return</td>
            </tr>
            <tr>
                <td>\t</td>
                <td>Tab</td>
            </tr>
            <tr>
                <td>\f</td>
                <td>Form Feed</td>
            </tr>
            <tr>
                <td>\ooo</td>
                <td>Octal value</td>
            </tr>
            <tr>
                <td>\xhh</td>
                <td>Hex value</td>
            </tr>
        </table>
    </section>
</body>

</html>