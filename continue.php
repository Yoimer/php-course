<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Continue</title>
  </head>
  <body>
	<?php
		for ($count=0; $count <= 10; $count++) {
			/*if ($count == 5) {
				continue;
			}*/
			if  ($count % 2 == 0) { continue; }
			echo $count . ", ";
		}
	?>
	
	<br />
	
	<?php // what's wrong with this ?
	$count = 0;
	while ($count <= 10) {
		if ($count == 5) {
			$count++;
			continue;
		}
		echo $count . ", ";
		$count++;
	}
	?>
	
	<br />
	
	<?php // loop insed a loop with continue
	
		for ($i=0; $i<=5; $i++){
			if ($i % 2 == 0) { continue(1); } //goes one loop back. It comes to do so by default
			                                  // so that's why it has not argument
			for ($k=0; $k<=5; $k++) {
				if ($k == 3) {continue(2);} //goes 2 loops back
				echo $i . "_" . $k . "<br />";
			}
		}
		
	?>
	
	
  </body>
</html>
