<?php

// Todo Null Coalescing Operator
// * Sebelumnya kita tahu bahwa data kosong direpresentasikan dengan data NULL di PHP
// * Dan hal yang paling repot di PHP adalah mengecek apakah sebuah data ada atau tidak, dan juga apakah data tersebut isinya null atau bukan
// * Biasanya untuk melakukan itu, kita perlu menggunakan pengecekan if statement dengan function isset($variable)
// * Namun untungnya di php ada null coalescing operator menggunakan tanda ??


// Todo Cara lama
$data1 = [
    "Genre" => "Action"
];

if(isset($data1["Genre"])){
    $hasil1 = $data1["Genre"];
} else {
    $hasil1 = "Nothing";
}

echo $hasil1 . PHP_EOL;



// Todo Cara cepat
$data2 =[
    "Genre" => "Romance"
];

$hasil2 = $data2["Genre"] ?? "Nothing";
echo $hasil2;