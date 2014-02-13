<!DOCTYPE html>
<html>
    <head>
        <title>break-continue-goto</title>
    </head>
    <body>
        <?php
            //break
			//this will print from 0 to 5.
			for($i = 0; $i < 10; ++$i){
				echo "$i<br>";
				if($i == 5){
					break;
				}
			}
			
			//continue
			//this will print from 0 to 9 and will not print 5.
			for($i = 0; $i < 10; ++$i){
				if($i == 5){
					continue;
				}
				echo "$i<br>";
			}
			
			$x = 10
			if($x == 10){
				goto hello;
			}
			echo "Hi<br>";	//this is not printed
			
			hello:
			echo "Hello<br>";	//this is printed
        ?>
    </body>
</html>