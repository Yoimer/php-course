<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Switch</title>
  </head>
  <body>
	  <?php
		$a = 31;
		
		switch ($a) {
			case 0:
				echo "a equals 0<br />";
				break;
			case 1:
				echo "a equals 1<br />";
				break;
			case 2:
				echo "a equals 2<br />";
				break;
			case 3:
				echo "a equals 3<br />";
				break;
			case 4:
				echo "a equals 4<br />";
				break;
			case 5:
				echo "a equals 5<br />";
				break;
			default:
				echo "a is not 0, 1, 2, 3 or 4<br />";
				break;
		}
	  ?>
	  
	  <?php
		// ChineseZodiac
		// whitespace doesn't matter 
		// colons, semicolons and breaks do
		$year = 2017;
		switch (($year - 4) % 12) {
			case 0:
				$zodiac = "Rat";
				break;
			case 1:
				$zodiac = "Ox";
				break;
			case 2:
				$zodiac = "Tiger";
				break;
			case 3:
				$zodiac = "Rabbit";
				break;
			case 4:
				$zodiac = "Dragon";
				break;
			case 5:
				$zodiac = "Snake";
				break;
			case 6:
				$zodiac = "Horse";
				break;
			case 7:
				$zodiac = "Goat";
				break;
			case 8:
				$zodiac = "Monkey";
				break;
			case 9:
				$zodiac = "Rooster";
				break;
			case 10:
				$zodiac = "Dog";
				break;
			case 11:
				$zodiac = "Pig";
				break;
		}
		echo "{$year} is the year of the {$zodiac}.<br />";
	  ?>
	  
	  <?php // case with multiple values
	  
		$user_type = 'customer';
		
		switch ($user_type) {
			case 'student':
				echo "Welcome!";
				break;
			case 'press':           //  first case
			case 'customer':        //  second case
			case 'admin':           //  third case
				echo "Hello!";
				break;
		}
	  ?>
  </body>
</html>

