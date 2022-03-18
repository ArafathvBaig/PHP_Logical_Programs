<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to change from a vending machine
 */
class Vending_Machine
{
    public $getChangeArray = array();
    public $sum = 0;

    /**
     * Function to get change in less notes
     * Passing the money as parameter
     * no return values
     */
    public function getChange($money)
    {
        while ($money != 0) {
            if ($money >= 1000) {
                $notes = floor($money / 1000);
                $money -= ($notes * 1000);
                $this->getChangeArray[1000] = $notes;
            } elseif ($money >= 500) {
                $notes = 1;
                $money -= 500;
                $this->getChangeArray[500] = $notes;
            } elseif ($money >= 100) {
                $notes = floor($money / 100);
                $money -= ($notes * 100);
                $this->getChangeArray[100] = $notes;
            } elseif ($money >= 50) {
                $notes = 1;
                $money -= 50;
                $this->getChangeArray[50] = $notes;
            } elseif ($money >= 10) {
                $notes = floor($money / 10);
                $money -= ($notes * 10);
                $this->getChangeArray[10] = $notes;
            } elseif ($money >= 5) {
                $notes = 1;
                $money -= 5;
                $this->getChangeArray[5] = $notes;
            } elseif ($money >= 2) {
                $notes = floor($money / 2);
                $money -= ($notes * 2);
                $this->getChangeArray[2] = $notes;
            } else {
                $notes = 1;
                $money -= 1;
                $this->getChangeArray[1] = $notes;
            }
            $this->sum += $notes;
        }
    }

    /**
     * Function to show how much change we got in seperate notes
     * Printing the total number of notes we got
     * Non-Parameterized function
     * No return values
     */
    public function showChange()
    {
        foreach ($this->getChangeArray as $keys => $values) {
            echo $keys . " notes:: " . $values . "\n";
        }
        echo "Total Number of Notes:: " . $this->sum;
    }
}

$vendingMachine = new Vending_Machine();
$money = readline('Enter a +Ve integer: ');
$money1 = (int) $money;
//echo gettype($money);
//var_dump(is_int($money));
if (gettype($money1) == 'integer') {
    if ($money1 > 0) {
        $vendingMachine->getChange($money1);
        $vendingMachine->showChange();
    } else {
        echo "The input is negative or zero";
    }
} else {
    echo "The input is not an integer";
}
