<?php

function foo()
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs <br>";
    if ($numargs >= 2) {
        echo "Second argument is: " . func_get_arg(1) . "<br>";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo "Argument $i is: " . $arg_list[$i] . "<br>";
    }
}

function sommaTutto()
{
    $numargs = func_num_args();
    $arg_list = func_get_args();
    $total = 0;
    for ($i = 0; $i < $numargs; $i++) {
        if (is_numeric($arg_list[$i])) {
            $total = $total + $arg_list[$i];
        }
    }
    return $total;
}


foo("nome", 5, "prova");
echo "<hr>";
foo("due", 51, "alfa", 33.4, "pippo", 3, "ciao");

echo "<hr>";
echo sommaTutto(5, 7, "aaa", 11);
echo "<hr>";
echo sommaTutto(2, 17, 321, 89.0, 212, 33.56, "gg");


class Student
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}
// la funzione accetta solo oggetti di tipo Student
// forza il passaggio del parametro ad essere istanza di Student
function infoStudent(Student $student)
{
    echo "Nome " . $student->name;
}
echo "<hr>";
$obj_student = new Student("Giulia");
// stampa il valore della proprietà "name"...
infoStudent($obj_student);
// genera un errore di tipo Catchable fatal error
//$info = infoStudent("ciao");

echo "<hr>";
$obj_student2 = new Student("Paolo");
infoStudent($obj_student2);

echo "<hr>";

$sum = function ($val1, $val2) {
    return $val1 + $val2;
};

echo $sum(3, 4); // Output: 7
echo "<hr>";

$array = [2, 4, 6];

array_map(function ($val) {
    echo ($val * 2) . "<br>";
}, $array);

/* Output
4
8
12
*/

echo "<hr>";
function helloFunction()
{
    $hello = "buongiorno";
    $ciao = "ciao";

    return function ($name) use ($hello, $ciao) {
        $hello = ucfirst($hello);
        return "$hello $ciao $name!";
    };
}
;

$helloProva = helloFunction();
echo $helloProva("Studenti MUSA");
echo $helloProva("programmatori   MUSA");