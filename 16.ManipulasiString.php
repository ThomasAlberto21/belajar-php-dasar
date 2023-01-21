<?php

// Todo Manipulasi String
// Todo .PHP_EOL sama dengan \n(enter)

// Todo 1. Dot Operator
// * Dot (titik) operator adalah operator yang bisa kita gunakan untuk menambahkan string dengan data lain (bisa string atau tipe data lainnya)
// * Sebenarnya kita bisa menggunakan + (plus) untuk menambahkan string, namun jika kita coba tambahkan string dengan tipe data number, maka akan terjadi error. Oleh karena itu direkomendasikan menggunakan . (dot) untuk menambahkan string dengan data lain


$nama = "Thomas Alberto";
$nim = 12221355;
$kelas = "12.1B.30";

echo "Nama \t: $nama" . PHP_EOL;
echo "Nim \t: $nim" . PHP_EOL;
echo "Kelas \t: $kelas" . PHP_EOL;



// Todo 2. Konversi ke Number dan Sebaliknya
// * Kadang kita sering melakukan konversi tipe data dari string ke number (int / float) atau sebaliknya
// * Di PHP untuk melakukan konversi cukup mudah, kita hanya perlu menggunakan tanda kurung ( tipe data )
// * Tipe data untuk string adalah string, untuk number bisa menggunakan int untuk integer dan float untuk floating point

$valueString = (string)100; // * Konversi tipe data number ke string
var_dump($valueString);

$valueInt = (int)"100"; // * Konversi tipe data string ke iteger
var_dump($valueInt);

$valueFloat = (float)"1.245"; // * Konversi tipe data string ke float
var_dump($valueFloat);



// Todo 3. Mengakses Karakter
// * String di PHP seperti array karakter, dimana kita bisa mengakses data tiap karakternya menggunakan kurung siku
// * Sama seperti di array, index pertama dimulai dari 0
// * Jika kita mengakses index melebihi karakter di string, maka akan terjadi error

$mas = "mas";
echo $mas[0] . PHP_EOL;
echo $mas[1] . PHP_EOL;
echo $mas[2] . PHP_EOL;


// Todo 4. Variable Parsing
// * Khusus string menggunakan double quote atau heredoc, kita bisa menggunakan karakter $ untuk mengakses variable.
// * Ini memudahkan ketika kita ingin menggabungkan string dengan variable.
// * Cara penggunaanya adalah dengan menggunakan karakter $ lalu diikuti dengan nama variable nya


$name = "Thomas";
echo "Halo $name , Semangat terus belajar PHP nya ya :)" . PHP_EOL;


// Todo 5. Curly Brace
// * Kadang kita butuh menggabungkan variable dengan string tanpa ada spasi. Hal ini akan menyulitkan jika hanya menggunakan variable parsing
// * Untungnya di PHP kita bisa menambahkan kurung kurawal sebelum menggunakan variable parsing

$world = "World";
echo "Hello {$world}s";