<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Loops: while</title>
  </head>
  <body>
		<?php
			/* $count = 0;
			while ($count <= 10) {
				if ($count == 5)
				{
					echo "FIVE, ";
				}
				else 
				{
					echo $count . ", ";
				}
				$count++; // increments by 1
			}
			echo "<br />";
			echo "Count: {$count}";*/
			
			/* for each even number, echoes the number
			 * as an upper cased string. */
			$count = 0;
			while ($count <= 10) {
				if (($count % 2 ) == 0)          // if even
				{
					switch ($count) {
						case 0:
							echo "ZERO, ";
							break;
						case 2:
							echo "TWO, ";
							break;
						case 4:
							echo "FOUR, ";
							break;
						case 6:
							echo "SIX, ";
							break;
						case 8:
							echo "EIGHT, ";
							break;
						case 10:
							echo "TEN, ";
							break;
					}
				}
				else                            // if odd
				{
					echo $count . ", ";
				}
				$count++; // increments by 1
			}
		?>
  </body>
</html>

