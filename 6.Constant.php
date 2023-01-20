<?php

// Todo Constant
// * Variable di PHP sifatnya mutable, artinya bisa dirubah
// * Jika kita ingin membuat variable yang immutable (tidak bisa dirubah), maka tidak bisa kita lakukan di PHP
// * Sebagai gantinya, terdapat fitur yang namanya constant
// * Constant adalah tempat untuk menyimpan data yang tidak bisa dirubah lagi setelah di deklarasikan
// * Untuk membuat constant kita bisa menggunakan function define()
// * Best practice pembuatan nama constant adalah menggunakan UPPER_CASE


define("NAMA" , "Thomas Alberto");
define("KELAS" , "12.1B.30");
define("NIM" , 12221355);

echo "NAMA \t: ";
echo NAMA;
echo "\n";

echo "KELAS \t: ";
echo KELAS;
echo "\n";

echo "NIM \t: ";
echo NIM;
echo "\n";
