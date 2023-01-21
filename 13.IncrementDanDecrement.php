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
$post_increment = 10; // * Post Increment
$post_increment++;
var_dump($post_increment); // (11)


$pre_increment = 10; // * Pre Increment
++$pre_increment;
var_dump($pre_increment); // (11)


// Todo Jika ingin menambahkan nilai pada $a dan menyimpannya pada $b menggunakan post increment
$a = 10;
$b = $a++; // * Post Increment
var_dump($b); // (10)



// Todo Jika ingin menambahkan nilai pada $c dan menyimpannya pada $d menggunakan pre increment
$c = 10;
$d = ++$c; // * Pre Increment
var_dump($c); // (11)


// Todo Decrement
$post_decrement = 10; // * Post Decrement
$post_decrement--; 
var_dump($post_decrement); // (9)

$pre_decrement = 10; // * Pre Decrement
$pre_decrement--; 
var_dump($pre_decrement); // (9)


// Todo Jika ingin menambahkan nilai pada $e dan menyimpannya pada $f menggunakan post decrement
$e = 10;
$f = $e--; // * Post decrement
var_dump($f); // (10)


// Todo Jika ingin menambahkan nilai pada $g dan menyimpannya pada $h menggunakan post decrement
$g = 10;
$h = --$g; // * Post decrement
var_dump($h); // (9)
