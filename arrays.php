<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Arrays</title>
  </head>
  <body>
	  <?php
		$numbers = array(4,8,15,16,23,42);
		echo $numbers[0];
	  ?>

	<br />
	<?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?>
    <?php echo $mixed[2];?><br />
    <pre>
		<?php print_r($mixed);?><br />
    </pre>

	<?php echo $mixed[3][1]; ?><br />
	
	<?php $mixed[2] = "cat"; ?>
	<?php $mixed[4] = "mouse"; ?>
	<pre>
		<?php print_r($mixed);?>
    </pre>
	
	<!-- Array syntax in PHP 5.4 and higher versions -->
	<?php $arreglo = [10,200,3000];?><br />
	<pre>
		<?php print_r($arreglo);?><br />
    </pre>

  </body>
</html>

