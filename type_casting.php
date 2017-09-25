<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title> Type Juggling and Type Casting</title>
  </head>
  <body>
	Type Juggling<br />
	<?php $count = "2 Cats"; ?>
	Type: <?php echo gettype($count); ?><br />
	
	<!-- Count gets converted from a string to an int 
	     that is what type juggling does -->
	<?php $count += 3; ?>
	Type: <?php echo gettype($count); ?><br />
	
	<!-- Programmers do this a lot, converting integers to string -->
	<?php $cats = "I have " . $count . " cats."; ?>
	Cats: <?php echo gettype($cats); ?><br />
	<br />
	
	Type Casting<br />
	<!-- Gets $count variable back to an integer.
		 settype changes it in place, it actually
		 affects the variable right where it is,
		 and changes its type, it recasts it in 
		 place, it will remain this datatype
		 unless it is changed later -->
	<?php settype($count, "integer"); ?>
	count: <?php echo gettype($count); ?><br />
	
	<!-- Changes $count "on the fly", which means just
	     on line 36, it WONT be string any longer
	     since it was set integer on line 30-->
	<?php $count2 = (string) $count; ?>
	count:  <?php echo gettype($count); ?><br />
	count2: <?php echo gettype($count2); ?><br />
	
	<?php $test1 = 3; ?>
	<?php $test2 = 3; ?>
	<?php settype($test1, "string"); ?>
	<?php (string) $test2; ?>
	test1: <?php echo gettype($test1); ?><br />
	test2: <?php echo gettype($test2); ?><br />
	
  </body>
</html>

