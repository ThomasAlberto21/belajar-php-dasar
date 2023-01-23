<?php

// Todo Variabel Scope
// * Di PHP, kita bisa membuat variable dimanapun yang kita mau
// * Scope variable adalah dibagian mana saja sebuah variable bisa diakses
// * PHP memiliki tiga jenis variable scope yaitu global , local , static




// Todo Global Scope
// * Variable yang dibuat diluar function memiliki scope global
// * Variable di scope global hanya bisa diakses dari luar function
// * Artinya di dalam function, kita tidak bisa mengakses variable di global scope


$global_scope = "Global Scope";

function globalScope()
{

    echo "Hello $global_scope"; // * Akan error karena global scope hanya bisa diakses dari luar function

}
globalScope();








// Todo Global Keyword
// * Namun jika kita ingin mengakses variable diluar function (global scope) dari dalam function, kita bisa menggunakan kata kunci global
// * Dengan menggunakan kata kunci global, maka kita bisa mengakses variable yang ada di global scope dari dalam function


$global_keyword = "Global Keyword";

function globalKeyword()
{
    global $global_keyword;
    echo "Hello $global_keyword" . PHP_EOL; // * Tidak akan error karena sudah menambahkan kata kunci global

}
globalKeyword();






// Todo $GLOBAL Variable
// * Selain menggunakan global keyword, setiap variable yang dibuat di global scope, secara otomatis akan disimpan di dalam array $GLOBAL oleh PHP
// * Jadi kita bisa menggunakan $GLOBAL variable dengan key nama variable nya dari dalam function jika ingin mengakses global variable
// * $GLOBAL adalah variable yang bersifat superglobal, artinya bisa diakses dari scope manapun


$name = "GLOBALS Variable";

function globals()
{
    echo "Hello {$GLOBALS["name"]}"  . PHP_EOL;
}

globals();






// Todo Local Scope
// * Variable yang dibuat di dalam function memiliki scope local
// * Variable di scope local hanya bisa diakses dari dalam function itu sendiri
// * Artinya variable tersebut tidak bisa diakses dari luar function ataupun dari function lain


function localScope()
{
    $local_scope = "Thomas Alberto";
}

localScope();
echo "Halo $local_scope" .PHP_EOL;  // * Tidak menampilkan apa-apa karena local scope hanya bisa diakses di dalam function itu sendiri



// Todo Static Scope
// * Secara default local variable itu siklus hidupnya hanya sebatas function nya dieksekusi
// * Jika sebuah function selesai dieksekusi, maka siklus hidup local variable nya selesai
// * PHP memiliki scope yang bernama static
// * Static scope hanya bisa di set ke local variable
// * Saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi
// * Artinya jika function tersebut dieksekusi lagi, maka static variable tersebut akan memiliki value dari sebelumnya



function staticScope()
{
    static $counter = 1;

    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

staticScope();
staticScope();
staticScope();
staticScope();
