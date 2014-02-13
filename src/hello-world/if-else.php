<!DOCTYPE html>
<html>
    <head>
        <title>if-else</title>
    </head>
    <body>
        <?php
            /*
			 * we use if, else and if else for as conditional statement
			 */
			 
			 $x = 10;
			 if($x > 0){
				echo "x is greater than 10.<br>";
			 }else{
				echo "x is not greater than 10.<br>";
			 }
			 
			 $y = 20;
			 if($y < 0){
				echo "y is less than zero.<br>";
			}else if($y == 0){
				echo "y is zero.<br>";
			}else{
				echo "y is greater than zero.<br>";
			}
        ?>
    </body>
</html>