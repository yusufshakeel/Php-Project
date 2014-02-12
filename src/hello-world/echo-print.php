<!DOCTYPE html>
<html>
    <head>
        <title>Echo Print</title>
    </head>
    <body>
        <?php
        /*
         * There are two simple ways to print output in php.
         * One is the echo keyword and the other is the print keyword.
         * echo is used to output one or more strings.
         * print is used to output only one string and it always return 1.
         * So if we take of speed then echo is faster than print. This is because print has
         * to return 1 after printing output while echo has nothing to return.
         */

        // echo and echo(); both are same.

        echo "Hello World<br>";
        echo("Hello World<br>");

        // echo can take multiple string parameters.

        echo "This ", "is ", "a ", "string.<br>"; //it will print "This is a string."

        /*
         * note!
         * echo( "This ", "is ", "a ", "string.<br>");
         * will not work.
         */
        ?>

        <?php
        /*
         * php code to swap values of two variables.
         */

        $x = 10;
        $y = 20;
        echo "Before swap: x = $x y = $y<br>";
        $t = $x;
        $x = $y;
        $y = $t;
        echo "After swap: x = $x y = $y<br>";
        ?>

        <?php
        /*
         * print and print(); both are same
         */
        print "<p>Hello World</p>";
        print("Value of x = $x and y = $y<br>");
        ?>
    </body>
</html>