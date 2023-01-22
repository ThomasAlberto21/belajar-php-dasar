<?php

// Todo For Each Loop
// * Kadang kita biasa mengakses data array menggunakann perulangan
// * Mengakses data array menggunakan perulangan sangat bertele-tele, kita harus membuat counter, lalu mengakses array menggunakan counter yang kita buat
// * Namun untungnya, di PHP terdapat perulangan for each, yang bisa digunakan untuk mengakses seluruh data di Array secara otomatis


// Todo Cara lama
$murid_1 = ["Thomas" , "Frans" , "Narko"];

for($i = 0; $i < count($murid_1); $i++){
    echo "Data ke $i : $murid_1[$i]" .PHP_EOL;
}


// Todo Cara cepat menggunakan for each
foreach($murid_1 as $index => $murid){
    echo "Data ke $index : $murid" .PHP_EOL;
}


// Todo jika mengambil banyak data
$person = [
    "murid_1" => "Thomas",
    "murid_2" => "Frans",
    "murid_3" => "Narko"
];

foreach($person as $key => $value){
    echo "Halo $key : $value" .PHP_EOL;
}


