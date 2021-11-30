<?php

//array

//indexed array
$a = ['Fortuner', 'Lamborgini', 'Minicooper'];
//var_dump($a);

// associative array
$b = [
    'Indonesia' => 'Durian',
    'Jepang' => 'Semangka Kotak',
    'Inggris' => 'cerry',
];
// multidimensional array

$c = [
    'a' => $a,
    'b' => $b,

];
//var_dump ($c);

$d = [
    'c' => $c,
    'lainnya' => [1,2,3,4,5,6,7,13]
];
//var_dump ($d);
//echo $c['a'][1];
//echo $d['c']['a'][1];
echo $d['c']['b']['Indonesia'];