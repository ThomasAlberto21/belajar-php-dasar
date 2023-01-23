<?php

// Todo Anonymous Function
// * Anonymous function adalah function tanpa nama, di PHP disebut juga dengan Closure
// * Anonymous function biasanya digunakan sebagai argument atau sebagai value di variable
// * Anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya


// Todo anonymous function 
$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Thomas");


// Todo anonymous function sebagai argument
function sayGoodBye(string $name,  $filter)
{
    $final_name = $filter($name);
    echo "Good Bye $final_name";
}


sayGoodBye("Thomas", function (string $name) {
    return strtoupper($name) . PHP_EOL;
});


// Todo Mengakses Variable di Luar Closure
// * Secara default, anonymous function tidak bisa mengakses variabel yang terdapat diluar function
// * Jika kita ingin menggunakan variable yang terdapat diluar anonymous function, kita perlu secara explicit menyebutkannya menggunakan kata kunci use lalu diikuti variable-variable yang ingin kita gunakan


$first_name = "Thomas";
$last_name = "Alberto";


$sayHelloThomas = function() use ($first_name , $last_name){
    echo "Hello $first_name $last_name";
};

$sayHelloThomas();