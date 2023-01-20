<?php

// Todo 1. Tipe Data Array
// * Array adalah tipe data yang berisikan kosong atau banyak data
// * Array di PHP bisa berisikan data dengan jenis berbeda-beda
// * Array di PHP memiliki panjang dinamis, artinya kita bisa menambah data ke Array sebanyak-banyaknya, tidak dibatasi kapasitasnya


// * Contoh membuat array dengan cara yang pertama (menggunakan fungsi array)
$values1 = array(1, 2, 3, 4, 5);
var_dump($values1);


// * Contoh membuat array dengan cara yang kedua(menggunakan kurung siku)
$values2 = ["Thomas", "Alberto", 12221355];
var_dump($values2);



// Todo 2. Operasi Array
// * $array[index]          | Mengakses data di array pada nomor index
// * $array[index] = value  | Mengubah data di array pada nomor index dengan value baru
// * $array[] = value       | Menambah data di array pada posisi paling belakang
// * unset($array[index])   | Menghapus data di array, index otomatis hilang dari array
// * count($array)          | Mengambil total data di array


// Todo $array[index]           
$names1 = ["Thomas", "Alberto"];
var_dump($names1[0]);

// Todo $array[index] = value   
$names2 = ["Budi", "Ganteng"];
$names2[0] = "Thomas";
var_dump($names2);

// Todo $array[] = value
$names3 = ["Thomas", "Alberto"];
$names3[] = "Ganteng";
var_dump($names3);

// Todo unset($array[index]) 
$names4 = ["Thomas", "Alberto", "Ganteng"];
unset($names4[1]);
var_dump($names4);

// Todo count($array) 
$names5 = ["Thomas", "Alberto", "Ganteng", 12221355];
var_dump(count($names5));



// Todo 3. Array Sebagai Map
// * Biasanya di kebanyakan bahasa pemrograman, terdapat tipe data bernama Map, yaitu asosiasi antara key dan value
// * Namun di PHP, Map bisa dibuat menggunakan Array
// * Secara default Array akan menggunakan index (number) sebagai key dan value nya kita bisa bebas memasukkan data ke dalam Array
// * Namun jika kita ingin, kita juga bisa mengubah index nya tidak harus menggunakan number, bisa gunakan tipe data lain, seperti string misal nya
// * Hal tersebut terlihat seperti Map di bahasa pemrograman lain


$array1 = [
    "id" => 1,
    "name" => "Thomas Alberto",
    "Kelas" => "12.1B.30",
    "nim" => 12221355
];
var_dump($array1);




// Todo 4. Array di dalam Array
// * Seperti dijelaskan di awal, Array di PHP bisa berisikan data apapun
// * Sehingga kita juga bisa membuat array di dalam array jika memang dibutuhkan


$array2 = [
    "id" => 1,
    "name" => "Thomas Alberto",
    "Kelas" => "12.1B.30",
    "nim" => 12221355,
    "tempat/tanggal_lahir" => [
        "tempat" => "Sungai Raya , Pontianak",
        "tanggal_lahir" => "17 April 2004"
    ]
];
var_dump($array2);