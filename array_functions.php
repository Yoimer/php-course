<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Array_Functions</title>
  </head>
  <body>
	  <?php $numbers = [8,23,15,42,16,4]; ?>
	  
	  Count:       <?php echo count($numbers);  ?><br />
	  Max value:   <?php echo max($numbers);    ?><br />
	  Min value:   <?php echo min($numbers);    ?><br />
	  <br />
	  <pre>
		  Sort:     <?php sort($numbers); print_r($numbers) ?><br />
	      Reversr sort:        <?php rsort($numbers); print_r($numbers) ?><br />
	  </pre>
	  <br />
	  Implode:      <?php /* It is no loger an array, it became a string */ echo $num_string = implode(" * ", $numbers); ?><br  />
	  
	  <!-- Explode will get a string and everytime it finds " * "
	       it will be used as a divider between the values. So everytime
	       it sees " * ", it will split this as a new object
	       into the array. It is EXTREMLY usefull when using a comma separated list
	   -->
	  Explode:      <?php print_r(explode(" * ", $num_string)); ?><br />
	  <br />
	  
	 15 in array?: <?php echo in_array(15, $numbers); //returns True or False ?><br />
	 19 in array?: <?php echo in_array(19, $numbers); //returns True or False ?><br />  
  </body>
</html>

