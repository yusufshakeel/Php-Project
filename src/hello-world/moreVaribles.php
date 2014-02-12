<!DOCTYPE html>
<html>
    <head>
        <title>More Variables</title>
    </head>
    <body>
        <?php
        /*
         * Variables are named memory location for storing values.
         * We declare variables using $ sign like this $name.
         * Variables are case-sensitive so $name and $Name are two different variables.
         * We can only use underscore _ letters [a-zA-Z] and digits [0-9] in variable names.
         * Name of the variables starts with a $ sign followed by a letter [a-zA-Z] or underscore _
         * We can not start a variable name with a digit.
         * Some valid variable name examples are
         * $name;
         * $_username;
         * $userId;
         * $x, $y, $z;
         * $user100;
         */

        //Declare two variables and swap their value using third variable.
        $x = 10;
        $y = 20;
        echo "Before swap: x = ".$x." y = ".$y."<br>";
        $x = $x + $y;
        $y = $x - $y;
        $x = $x - $y;
        echo "After swap: x = ".$x." y = ".$y."<br>";
        ?>

        <?php
        //<----Start of all global variables scope.

            function fun(){ //<--- Start of local variables scope.


            //<--- End of local variables scope.
            }


        //<----End of all global variables scope.
        ?>

        <?php

        /*
         * Variable have scope and accordingly they are called local variable and global variable.
         * A variable declared outside of all the functions is called a global variable.
         * A variable declared inside a function is called a local variable.
         * Remember a local variable is not accessible outside of the function where it was declared.
         */

        $x = 10;    //this is a global variable.
        echo "x ".$x."<br>";    //this will print the global variable.

        function myFunction(){
            $x = 20;    //this is a local variable.
            echo "x ".$x."<br>";    //this will print the local variable.
        }

        myFunction();   //calling myFunction()
        echo "x ".$x."<br>";    //this will again print the global variable.

        /*
         * We can access a global variable from inside a function by using the global keyword.
         */

        echo "x ".$x."<br>";    //this will print the global variable.

        function callGlobalVariableX(){
            global $x;
            echo "x ".$x."<br>";    //this will print the global variable.
        }

        callGlobalVariableX();   //calling callGlobalVariableX()
        echo "x ".$x."<br>";    //this will again print the global variable.

        /*
         * php stores all the global variables in $GLOBALS[] array.
         * and we can access the global variables by the putting its name inside the [].
         * example
         * $GLOBALS['x'];
         */

        echo "x ".$GLOBALS['x'];    //this will print the value of global variable.

        /*
         * Local variables are destroyed(deleted) after control moves out of their scope.
         * If we want to keep a local variable alive we declare static variables.
         */

        function myStaticVariable(){
            static $m = 10; //this is a static variable.
            echo "static variable m: ".$m."<br>";
            $m = $m + 10;   //value of m increased by 10.
        }

        myStaticVariable(); //calling myStaticVariable() for the first time.
        myStaticVariable(); //calling myStaticVariable() for the second time.
        myStaticVariable(); //calling myStaticVariable() for the third time.
        ?>
    </body>
</html>