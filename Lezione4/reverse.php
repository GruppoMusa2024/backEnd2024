<?php

function reverseString(string $str) :string {
    return strrev($str);
}

$myString = "Giambattista"; 
echo "$myString <br>";
$newString = reverseString($myString);
echo "La parola invertita e': " .$newString;



function reverse_string(string $str1): string|null
{
    $n = strlen($str1);
    // echo "$n $str1<br>";
    if ($n == 1) {
        return $str1;
    } else {
        $n--;
        return reverse_string(substr($str1, 1, $n)) . substr($str1, 0, 1);
    }
}
echo '<br>';
echo reverse_string('paolo rossi verdi') . "<br>";

echo strrev("paolo rossi");

