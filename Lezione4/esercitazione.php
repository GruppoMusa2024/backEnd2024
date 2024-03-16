<?php


$addresses = array(
    'via tal dei tali 81 roma italia',
    ['via tal 81', 'roma', 'italia'],
    "via roma 2",
    null,
    3,
    23.67,
    ["mario", "rossi", "roma", "italia"],
    ['xxx', 33, 'roma'],
);

echo "Ecco gli indirzzi trovati:<br>";
foreach ($addresses as $value) {

    if (is_string($value)) {
        echo "Indirizzo: " . $value . "<br>";
    } elseif (is_array($value)) {
        $indirizzo = implode(" ", $value);
        echo $indirizzo;
        echo "<br>";
    }
}

$array = array('lastname', 'email', 'phone');
$comma_separated = implode(" | ", $array);

echo $comma_separated;
