<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to perform Reverse of a Number operations
 */
class Reverse_of_Number
{
	/**
	 * Function to get Reverse of a Number
	 * Passing Number as parameter
	 * Returns the reverse of the number
	 */
	function reverse($number)
	{
		$reverse = 0;
		while ($number > 0) {
			$remainder = $number % 10;
			$reverse = ($reverse * 10) + $remainder;
			$number = floor($number / 10);
		}
		return $reverse;
	}
}
$reverseOfNumber = new Reverse_of_Number();
$number = readline('Enter a Number: ');
echo "The Reverse of the Number " . $number . " is: " . $reverseOfNumber->reverse($number);
