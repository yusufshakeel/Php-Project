<!DOCTYPE html>
<html>
    <head>
        <title>for-and-for-each</title>
    </head>
    <body>
        <?php
            /*
			 * we use for to loop as long as the condition is true.
			 * print from 1 to 10.
			 */
			for($i = 1; $i <= 10; ++$i){
				echo "$i<br>";
			}
			
			/*
			 * print content of an array.
			 */
			
			$arr = array(1,2,3,4,5,6,7,8,9,10);
			for($i = 0; $i < count($arr); ++$i){
				echo "$arr[$i]<br>";
			}
			
			//foreach
			foreach($arr as $a){
				echo "$a<br>";	//this will print the content of arr
			}
        ?>
    </body>
</html>