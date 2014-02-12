<!DOCTYPE html>
<html>
    <head>
        <title>Comment and Variables</title>
    </head>
    <body>
        <?php
            //  <-- We use this for single line comment.
            #   <-- We can also use this for single line comment.

            /*
             * This is for multiple line
             * comments.
             */

            //declaring a variable
            $name;

            //initializing the variable
            $name = "Yusuf Shakeel";

            //display content of variable name
            echo "My name is " . $name . "." . "<br>";

            /*
             * Note! In php we use . to concatenate string and variables.
             * In java we use + as in
             * System.out.println("My name is "+name+".");
             * The println() method will take the cursor to the next line.
             * In a web page we have to use <br> tag to go to the next line.
             */

            /*
             * php keywords are case-insensitive.
             * therefore
             * echo 'Hi';
             * and
             * ECHO 'Hi';
             * will give the same output.
             *
             * However variables are case-sensitive in php.
             * therefore
             * $name;
             * $Name;
             * are two different variables.
             */

            //To print Hello thrice in separate line we use <br> tag.
            echo "Hello <br>";
            echo "Hello <br>";
            echo "Hello <br>";

            /*
             * Similarly if we want to add <p> tag we can do this by using the echo
             * function as shown below.
             */
            echo "<p>This is a paragraph.</p>";
        ?>
    </body>
</html>