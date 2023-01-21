<?php

// Todo Increment dan Decrement
// * PHP mendukung gaya bahasa pemrograman C untuk menaikkan(increment) dan menurunkan(decrement) data number sejumlah 1 angka
// * Ini bisa mempersingkat kita ketika ingin menaikkan data


// Todo
// * $a++    | Post increment    | Kembalikan $a lalu naikkan 1 angka
// * ++$a    | Pre increment     | Naikkan $a satu angka, lalu kembalikan $a
// * $a--    | Post decrement    | Kembalikan $a lalu turunkan 1 angka
// * --$a    | Pre decrement     | Turunkan $a satu angka, lalu kembalikan $a


// Todo Increment
$a = 10;

$a++; // * Post Increment
++$a; // * Pre Increment
var_dump($a);


// Todo Jika ingin menambahkan nilai pada $b dan menyimpannya pada $c
$b = 11;

$c = $b++; // * Post Increment
$c = ++$b; // * Pre increment

var_dump($c);
