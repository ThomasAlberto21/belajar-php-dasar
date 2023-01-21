<?php

// Todo Operator Array
// * Di PHP, Array memiliki operator khusus
// * Mungkin terlihat mirip dengan operator-operator sebelumnya, tapi cara kerjanya sedikit berbeda


// Todo
// * $a + $b     | Union         | Menggabungkan array $a dan $b
// * $a == $b    | Equality      | true jika $a dan $b memiliki key-value sama
// * $a === $b   | Identity      | true jika $a dan $b memiliki key-value sama dan posisi sama
// * $a != $b    | Inequality    | true jika $a dan $b tidak sama
// * $a !== $b   | Nonidentity   | true jika $a dan $b tidak identik


// Todo Union
$first =[
    "first_name" => "Thomas"
];

$last =[
    "last_name" => "Alberto"
];

$full = $first + $last;
var_dump($full) ;


// Todo equality , identity , Inequality , Nonidentity
$a = [
    "first_name" => "Thomas",
    "last_name" => "Alberto"
];

$b = [
    "last_name" => "Alberto",
    "first_name" => "Thomas"
];

var_dump($a == $b); // * Equality (TRUE , karena memiliki key-value yang sama)
var_dump($a === $b); // * identity (FALSE , karena posisi yang tidak sama walaupun key-value nya sama)
var_dump($a != $b); // * inequality (FALSE , karena key-value nya sama)
var_dump($a !== $b); // * Nonidentity  (TRUE , karena posisi nya tidak identik)


