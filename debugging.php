<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Debugging</title>
  </head>
  <body>
	<?php
		/* output useful information
		 * echo $variable;                // variable value
		 * print_r($array);              // print readable array. Looks best if surrounded by <pre></pre> tags
		 * gettype($variable);          // variable type
		 * var_dump($variable);        // variable type and value
		 * get_defined_vars();        // array of defined variables
		 * debug_backtrace();        // show backtrace   
		 */
		$number = 995;
		$string = "Bug?";
		$array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");
		
		var_dump($number);
		echo "<br />";
		var_dump($string);
		echo "<br />";
		var_dump($array);
	?>
	<br />
	
	<pre>
		<?php
			print_r(get_defined_vars());
		?>
	</pre>
	<br />
	
	<?php
	
		function say_hello_to($word) {
			echo "Hello World!<br />";
			echo "<pre>";
			var_dump(debug_backtrace());
			echo "</pre>";
		}
		
		say_hello_to('Everyone');
		//say_hello_to('Everyone');
		
	?>
  </body>
</html>

