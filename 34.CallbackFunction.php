<?php


// Todo Callback Function
// * Callback adalah sebuah mekanisme sebuah function memanggil function lainnya sesuai dengan yang diberikan di argument
// * Hal ini sebenarnya sudah kita lakukan di materi Variable Function dan Anonymous Function
// * Namun di PHP ada cara lain untuk implementasi callback, yaitu menggunakan tipe data callable
// * Dan untuk memanggil callback function tersebut, kita bisa menggunakan function call_user_func(callable arguments)
// * callable(bisa mengirim string , anonymous function dan arrow function)


function sayHello(string $name, callable $filter)
{
    $final_name = call_user_func($name , $filter );
    echo "Halo selamat datang $final_name" . PHP_EOL;
};

sayHello("Thomas", "strtoupper"); // * Menggunakan String (fungsi strtoupper adalah untuk membuat tulisan besar semua)
sayHello("Thomas", "strtolower"); // * Menggunakan String (fungsi strtolower adalah untuk membuat tulisan kecil semua)
sayHello("Thomas", function (string $name) { // * Menggunakan anonymous function
    return strtoupper($name);
});

sayHello("Thomas" , fn($name) => strtolower($name)); // * Menggunakan arrow function