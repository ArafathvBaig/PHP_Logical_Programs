<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to compute Monthly Payment problem
 */
class Monthly_Payment
{
    /**
     * Function to calculate monthly payment
     * Passing principal, rate and years as parameters
     * Printing the monthly payment
     */
    public static function monthlyPayment($principal, $rate, $years)
    {
        $p = $principal;
        $n = 12 * $years;
        $r = $rate / (12 * 100);
        $payment = ($p * $r) / (1 - pow(1 + $r, -$n));
        echo "Your Monthly Payment is: " . round($payment, 2);
    }
}
$principal = readline('Enter the Principal amount: ');
$rate = readline('Enter te interest rate per Year: ');
$years = readline('Enter No.of Years: ');
Monthly_Payment::monthlyPayment($principal, $rate, $years);
