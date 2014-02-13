<!DOCTYPE html>
<html>
    <head>
        <title>while-and-do-while</title>
    </head>
    <body>
        <?php
            /*
			 * we use while to loop as long as the condition is true.
			 * print from 1 to 10.
			 */
			$x = 1;
			while($x <= 10){
				echo "$x<br>";
				++$x;
			}
			
			/*
			 * print content of an array.
			 */
			
			$arr = array(1,2,3,4,5,6,7,8,9,10);
			$len = count($arr);	//length of the array
			$i = 0;
			while($i < $len){
				echo "$arr[$i]<br>";
				++$i;
			}
			
			//do-while = first do then check condition.
			$m = 1;
			do{
				echo "$m<br>";
				++$m;
			}while($m <= 10);
        ?>
    </body>
</html>