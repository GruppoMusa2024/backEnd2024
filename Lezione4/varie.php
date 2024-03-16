<?php


if (function_exists('json_validate')) {
    echo "funzione  are available.<br />\n";
    var_dump(json_validate('{ "test": { "foo": "bar" } }'));
} else {
    echo "funzione are NOT available.<br />\n";
    echo "uso un'altra funzione...";
}

echo "<hr>";
$var = '';


// This will evaluate to TRUE so the text will be printed.
if (isset($var)) {
    echo "This var is set so I will print<br>";
}

$var = null;

if (is_null($var)) {
    echo "è nulla<br>";
}

unset($var);

if (isset($var)) {
    echo "non è settata<br>";
}

$a = "test";
$b = "anothertest";

var_dump(isset($a));      // TRUE
var_dump(isset($a, $b)); // TRUE

unset($a);

var_dump(isset($a));     // FALSE
var_dump(isset($a, $b)); // FALSE

$foo = NULL;
var_dump(isset($foo));   // FALSE


echo "<hr>";
$varx = 0;

// Evaluates to true because $var is empty
if (empty($varx)) {
    echo '$var is either 0, empty, or not set at all<br>';
}

// Evaluates as true because $var is set
if (isset($varx)) {
    echo '$var is set even though it is empty<br>';
}

echo "<hr>";
$array = ['a', 7, "b"];
$data = array(1, 1., NULL, new stdClass, 'foo', $array);

foreach ($data as $value) {
    echo gettype($value), "<br>";
}
echo "<hr>";

$foo = "5bar"; // string
$foo1 = 20.5; // string
$bar = true;   // boolean

settype($foo, "integer"); // $foo is now 5   (integer)
echo $foo . "<br>";
settype($bar, "string");  // $bar is now "1" (string)
echo $bar . "<br>";
settype($foo1, "string");
echo $foo1 . " " . gettype($foo1) . "<br>";
settype($foo1, "integer");
echo $foo1 . " " . gettype($foo1) . "<br>";