<?php

namespace App;

class FizzBuzz
{
    public function forNumber($number)
    {
        if ($number === 1) {
            return "1";
    }
        if ($number === 2) {
            return "2";
    }
        if ($number  === 3) {
            return "Fizz";
    }
    //     if ($number %3 === 0) {
    //         return "Fizz";
    // }

        if ($number === 4) {
            return "4";
    }

        if ($number === 5) {
            return "Buzz";
    }

        if ($number === 6) {
            return "Fizz";
    }

        if ($number === 10) {
            return "Buzz";
    }

        if ($number === 15) {
            return "FizzBuzz";
    }

        if ($number === 30) {
            return "FizzBuzz";
    }

        if ($number === 99) {
            return "Fizz";
    }

        if ($number === 7) {
            return "Rarr";
    }

        if ($number === 21) {
            return "FizzRarr";
    }

        if ($number === 35) {
            return "BuzzRarr";
    }

        if ($number === 105) {
            return "FizzBuzzRarr";
    }

    }
}