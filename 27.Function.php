<?php

// Todo Function
// * Function adalah block kode program yang akan berjalan saat kita panggil
// * Sebelumnya kita sudah menggunakan function isset(), count() dan lain-lain.
// * Untuk membuat function di PHP, kita bisa menggunakan kata kunci function, lalu diikuti dengan nama function, kurung () dan diakhiri dengan block 
// * Kita bisa memanggil function dengan menggunakan nama function lalu diikuti dengan kurung ()
// * Di bahasa pemrograman lain, function juga disebut dengan method


// Todo function sederhana
function sayHello()
{
    echo "Hello Thomas" . PHP_EOL;
}

sayHello();



// Todo Lokasi function
// * PHP sangat flexible dalam pembuatan function
// * Tidak seperti pada bahasa pemrograman lain yang harus ada aturan lokasi dimana membuat function
// * Di PHP kita bebas membuat function dimanapun, bisa di dalam if statement, di dalam function, dan sebagainya
// * Namun perlu diingat, jika kode function yang belum dieksekusi oleh PHP, maka function tersebut tidak akan bisa digunakan


// Todo function di dalam if
$data = true;
if ($data) {
    function sayData()
    {
        echo "Hello Data" . PHP_EOL;
    }
}

sayData();




// Todo function komplek
$buat = false;

if ($buat === true) {
    function sayTrue()
    {
        echo "Hello True" . PHP_EOL;
    }
    return sayTrue();
} else if ($buat === false) {
    function sayFalse()
    {
        echo "Hello False" . PHP_EOL;
    }
    return sayFalse();
} else {
    echo "Nothing" . PHP_EOL;
}
