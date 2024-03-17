<?php

//es1
//Dati 3 numeri (45,2,81) scrivere una funzione che determini qual è il maggiore
$myNumbers = array(45, 2, 81);
function findMaxNumber(array $numbers) :int{
    return max($numbers);
   
}
$maxNumber = findMaxNumber($myNumbers);
echo "The <strong>highest</strong> number in the Array";
echo "<pre>";
print_r($myNumbers); 
echo "</pre>";
echo "is <strong>$maxNumber</strong>.";


//es2
/*
Creare una funzione che controlla se la stringa che gli passa è palindroma

panico
alveare
rumore
madam
osso
ossesso
esose
I topi non avevano nipoti
*/

echo"<hr>";

$myString = "I topi non avevano nipoti";
function checkPalindrome(string $string):void{
$newString = preg_replace("/[^a-zA-Z0-9]/","", $string);
$newString = strtolower((string)$newString);
if ($newString === strrev($newString)) {
    echo "The string <strong>'$string'</strong> is a palindrome";
}
else {
    echo "The string <strong>'$string'</strong>  is NOT a palindrome";
}
}
checkPalindrome($myString);
