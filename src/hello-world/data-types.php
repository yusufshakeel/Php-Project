<!DOCTYPE html>
<html>
    <head>
        <title>Data Types</title>
    </head>
    <body>
        <?php
        /*
         * Like other programming language (C C++ Java) php also has some data types.
         * These data types are as follows:
         * Integer
         * Float point numbers
         * Boolean
         * String
         * Array
         * Object
         * NULL
         */

        // in php we use var_dump() to print the data type and value of the variable.

        /*
         * An Integer is a number without decimal point.
         * example of integer: 10, -5, 16 etc...
         */
        $integerVar = 10;
        var_dump($integerVar);

        /*
         * We can specify integer in three formats namely:
         * Decimal (base 10) using 0-9
         * Octal (base 8) using 0-7. Number in octal form starts with 0
         * Hexadecimal (base 16) using 0-9 and A-F. Number in hexadecimal form starts with 0x
         */
        $decimalVar = 105;
        $octalVar = 060;
        $hexadecimalVar = 0x1F;
        var_dump($decimalVar);
        var_dump($octalVar);
        var_dump($hexadecimalVar);

        /*
         * Floating point numbers are the numbers with decimal points.
         * example of floating point numbers: 12.34, -123.456, 0.1 etc...
         */
        $floatPointVar = 0.1;
        $mantissaExponent = 2e-5;
        var_dump($floatPointVar);
        var_dump($mantissaExponent);

        /*
         * For conditional testing we use boolean values TRUE and FALSE.
         */
        $isEmpty = FALSE;
        var_dump($isEmpty);

        /*
         * A string is an array of characters. Strings are enclosed in double quotes like this "Hello World"
         * we can even enclose a string in single quotes like this 'Hello World'
         * If a string has single quotes then we use double quotes to enclose the string
         * like this "Yusuf's project work"
         */
        $name = 'Yusuf Shakeel';
        $prjName = "Php-Project";
        echo "My name is $name and I am working on $prjName.<br>";
        var_dump($name);
        var_dump($prjName);

        /*
         * An array is a variable that stores multiple values.
         * We define array in php as
         * $varName = array(elem1,elem2,...);
         * We can access an array element using its index.
         * Note! array indexing starts with 0.
         * Therefore, if an array is of size 10 then indexing will be from 0 to 9.
         */
        $marks = array(10, 20, 30, 40, 50);
        var_dump($marks);
        echo "<br>Marks[0] = $marks[0]<br>";

        /*
         * An object is a instance of a class. Objects are an important part of OOP.
         * An object is like a data type created from a class. It has some variables and
         * some function to work on that variables.
         */
        class Box{
            var $width, $height;
            function setDimension($w, $h){
                $this->width = $w;
                $this->height = $h;
            }
            function getDimension(){
                return $this->width." ".$this->height;
            }
        }

        /*
         * NULL is a keyword used in C C++ Java and it is also used in php.
         * NULL means no value.
         * For example in C if a pointer is set to NULL it means it is pointing no where.
         * Similarly in php if we want to empty a variable we can do so by assigning NULL to it.
         * example
         * $length = 10;    //length holds 10
         * $length = NULL;  //now length is empty
         */
        $length = 10;
        $length = NULL;
        var_dump($length);
        ?>
    </body>
</html>