<?php


namespace Tools;

class Calculator {

    public function add($number1, $number2)
    {
        $number = $number1 + $number2;
        return $number;
    }

    public function subtract($number1, $number2)
    {
        $number = $number1 - $number2;
        return $number;
    }

    public function divide($number1, $number2)
    {
        if ($number2 === 0) {
            return false;
        }
        $number = $number1 / $number2;
        return $number;
    }

    public function doSomeMath($number1, $number2, $number3)
    {
        return ($number1 + $number2) / $number3;
    }

    public function numberGreaterOrEqual($number1, $number2)
    {
        return $number1 >= $number2 ? true : false;
    }
}
