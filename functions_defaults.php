<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Functions: Default Arguments Values</title>
  </head>
  <body>
	  <?php
	  
		function paint($room="office", $color="red") { //default values
			return "The color of the {$room} is {$color} <br />";
		}
		echo paint();
		echo paint ("bedroom", "blue");

	  ?>
  </body>
</html>

