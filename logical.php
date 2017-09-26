<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Logical</title>
  </head>
  <body>
	  <?php
		$a = 4;
		$b = 3;
		
		if ($a > $b) {
			echo "a is larger than b";
		}
	  ?>
	  <br />
	  
	  <?php // Only welcome new users
		$new_user = true;
		if ($new_user) {
			echo "<h1>Welcome</h1>";
			echo "<p>We are glad you decided to join us.</p>";
		}
	  ?>
	  <br />
	  
	  <?php // don't divide by zero
		$numerator = 20;
		$denominator = 0;
		$result = -1;
		if ($denominator > 0) {
			$result = $numerator / $denominator;
			echo "Result: {$result}";
		}
		echo "Result: {$result}";
		//echo "Result: {$result}"; this can also echo here
		//but $result has to be defined before.
	  ?>
	  
	  
	  
  </body>
</html>

