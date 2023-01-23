<?php

// Todo Array Function
// * Di PHP juga terdapat banyak sekali function bawaan yang bisa kita gunakan untuk memanipulasi data Array
// * https://www.php.net/manual/en/ref.array.php 


// Todo
// * array_keys()     | Mengambil semua keys milik array
// * array_values()   | Mengambil semua values milik array
// * array_map()      | Mengubah semua data array dengan callback
// * sort()           | Mengurutkan array
// * rsort()          | Mengurutkan array terbalik
// * shuffle()        | Mengubah posisi data di array secara random

// Todo array_keys
$murid_1 = [
    "pertama" => "Thomas",
    "kedua" => "Frans",
    "ketiga" => "Narko"
];

var_dump(array_keys($murid_1));


// Todo array_values
$murid_2 = [
    "pertama" => "Thomas",
    "kedua" => "Frans",
    "ketiga" => "Narko"
];

var_dump(array_values($murid_2));


// Todo Array Map
$data_1 = [1,2,3,4,5,6,7,8,9,10];
var_dump(array_map(fn($data_1) => $data_1 * 2 , $data_1));


// Todo sort
$data_2 = [2,4,5,1,3];
sort($data_2);
var_dump($data_2);


// Todo rsort
$data_3 = [1,2,3,4,5];
rsort($data_3);
var_dump($data_3);


// Todo shuffle
$data_4 = [1,2,3,4,5];
shuffle($data_4);
var_dump($data_4);