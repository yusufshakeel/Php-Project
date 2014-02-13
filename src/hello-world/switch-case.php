<!DOCTYPE html>
<html>
    <head>
        <title>switch-case</title>
    </head>
    <body>
        <?php
            /*
			 * we use switch-case to select from multiple options
			 */
			 
			 $x = 0;
			 switch($x){
				case 1:
					echo "1<br>";
					break;
				case 2:
					echo "2<br>";
					break;
				default:
					echo "Something else.<br>";
					break;
			}
        ?>
    </body>
</html>