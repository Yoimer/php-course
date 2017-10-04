<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Functions: Arguments</title>
  </head>
  <body>
		<?php
			function say_hello_to($word) {
				echo "Hello {$word}!<br />";
			}	
	    
	    $name = "John Doe";
	    say_hello_to($name);
	  ?>
	  
	  <?php
		  function better_hello($greeting, $target, $punct) {
			echo $greeting . " ". $target . $punct . "<br />";
	    }

			better_hello("Hello", "Mundo", "!!!!");
	    
			better_hello("Hello", $name, "!!!!******");
			
			$full_name = "Roman Figueroa";
			
			better_hello("Greetings", $full_name, null); // provides a value. but that value is nothing
			                                             // an empty string would have done the same
	  ?>
	
  </body>
</html>

