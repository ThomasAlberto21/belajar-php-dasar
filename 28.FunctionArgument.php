<?php

// Todo Function Argument
// * Kita bisa mengirim informasi ke function yang ingin kita panggil
// * Untuk melakukan hal tersebut, kita perlu menambahkan argument atau parameter di function yang sudah kita buat
// * Cara membuat argument sama seperti cara membuat variabel
// * Argument ditempatkan di dalam kurung () di deklarasi function
// * Argument bisa lebih dari satu, jika lebih dari satu, harus dipisah menggunakan tanda koma


// Todo Program Sederhana
function sayHello1($name, $nim, $kelas)
{
    echo "Halo perkenalakan nama saya $name , nim saya $nim , saya dari kelas $kelas" . PHP_EOL;
}

sayHello1("Thomas Alberto", 12221355, "12.1B.30");



// Todo Default Argument Value
// * PHP mendukung default argument value
// * Fitur ini memungkinkan jika ketika kita memanggil function tidak memasukkan parameter, kita bisa menentukan data default nya apa


// Todo Kesalahan Default Argument Value
// * Default argument value bisa disimpan argument manapun
// * Namun jika argument lebih dari satu, dan kita menyimpan default argument value di parameter awal, maka itu kurang berguna dan akan terjadi error , alangkah baik nya jika menyimpan default argument value nya di parameter kedua atau yang lainnya


function sayHello2($firstName,  $lastName = "Alberto")
{
    echo "Halo perkenalkan nama saya $firstName $lastName" . PHP_EOL;
}

sayHello2("Thomas");



// Todo Type Declaration
// * Sama seperti variable, argument di PHP bisa kita masukkan data yang dinamis
// * Kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat function yang menggunakan argument dengan tipe data tertentu
// * Untungnya di PHP, kita bisa menambahkan type data di argument, sehingga PHP akan melakukan pengecekan ketika kita mengirim value ke function tersebut
// * Jika tipe data value tidak sesuai, maka akan terjadi error
// * Secara default PHP akan melakukan percobaan konversi tipe data secara otomatis, misal jika kita menggunakan tipe int, tapi kita mengirim string, maka PHP akan otomatis mengkonversi string tersebut menjadi int


// Todo Valid Types (1)
// * Class / Interface           | Parameter harus tipe Class / Interface
// * self                        | Parameter harus sama dengan Class dimana function ini dibuat
// * array                       | Parameter harus array
// * callable                    | Parameter harus callable
// * bool                        | Parameter harus boolean 
// * float                       | Parameter harus floating point
// * int                         | Parameter harus integer number
// * string                      | Parameter harus string
// * interable                   | Parameter harus array atau tipe Traversable
// * object                      | Parameter harus sebuah object


function sum(int $first_number, int $last_number)
{
    $total = $first_number + $last_number;
    echo "Total dari $first_number + $last_number = $total" . PHP_EOL;
}

sum(10, 10);
sum("10", "10");
sum(true, false);
// sum([], []); // Todo Jika menambahkan argument array maka program akan error



// Todo Variable-length Argument List
// * Variable-length argument list merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value
// * Variable-length argument list secara otomatis akan membuat argument tersebut menjadi array, namun kita tidak perlu manual mengirim array ke functionnya
// * Variable-length argument list hanya bisa dilakukan di argument posisi terakhir
// * Untuk membuat variable-length argument list, kita bisa menggunakan tanda … (titik tiga kali) sebelum nama argument
// * implode() adalah sebuah fungsi PHP yang berguna untuk mengubah suatu array menjadi sebuah text atau kalimat.


function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }

    echo "Total dari " . implode(" + ", $values) . " = $total " . PHP_EOL;
}


sumAll(5,10,10);
