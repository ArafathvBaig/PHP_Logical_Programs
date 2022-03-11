<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to perform Prime Number operations
 */
class Prime_Number
{
	/**
	 * Function to check the Number is Prime or Not
	 * Passing the Number as Parameter
	 * Printing weather the number is prime or not
	 */
	function prime($number)
	{
		$flag = 0;
		if (($number <= 0) || ($number == 1)) {
			echo $number . " is not a Prime Number.";
		} else if ($number == 2) {
			echo $number . " is a Even Prime Number.";
		} else {
			for ($i = 1; $i <= $number; $i++) {
				if (($number % $i) == 0) {
					$flag = $flag + 1;
				} else {
					$flag = $flag;
				}
			}
			if ($flag == 2) {
				echo $number . " is a Prime Number.";
			} else {
				echo $number . " is not a Prime Number.";
			}
		}
	}
}
$obj = new Prime_Number();
$number = readline('Enter a Number: ');
$obj->prime($number);
