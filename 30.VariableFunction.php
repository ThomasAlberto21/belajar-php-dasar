<?php

// Todo Variable Function
// * PHP mendukung konsep yang bernama variable function
// * Variable function merupakan sebuah fitur di PHP yang memungkinkan kita bisa memanggil function melalui nilai dalam variabel.
// * Untuk menggunakan variable function, kita bisa secara langsung memanggil $namaVariable(), jika ingin menambahkan argument, kita bisa menggunakan $namaVariable(argument)



function sayHello(string $name, $function)
{
    $final_name = $function($name);
    echo "Hallo $final_name Selamat Datang" . PHP_EOL;
}

sayHello("Eko", "strtoupper");
sayHello("Eko", "strtolower");
