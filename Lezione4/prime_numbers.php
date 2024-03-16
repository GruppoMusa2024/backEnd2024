<?php

/*
1- 100
Write a function to check whether a number is prime or not.

Note: A prime number (or a prime) is a natural number greater 
than 1 that has no positive divisors other than 1 and itself.

funzione isPrime(): true | false

TIP : $a % $b Modulo

for 1-100 
    {
        Il numero x è idPrime
    }

*/



function isPrime($number) {
    if ($number <= 1) {
        echo "Il numero $number non è primo <br>";
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) { // Optimized loop to square root of the number
        if ($number % $i == 0) {
            echo "Il numero $number non è primo <br>";
            return false;
        }
    }
    echo "Il numero $number è primo <br>";
    return true;
}

for ($i = 1; $i <= 100; $i++) {
    isPrime($i);
}

isPrime(100);



