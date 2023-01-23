<?php

// Todo String Function
// * Sebelumnya saya pernah menggunakan beberapa function bawaan dari PHP untuk memanipulasi data string.
// * Sebenarnya banyak sekali function bawaan PHP yang bisa kita gunakan untuk memanipulasi string
// * https://www.php.net/manual/en/ref.strings.php 


// Todo
// * join() / implode()       | Menggabungkan array menjadi string
// * explode()                | Memecah string menjadi array
// * strtolower()             | Mengubah string menjadi lowercase
// * strtoupper()             | Mengubah string menjadi uppercase
// * substr()                 | Mengambil sebagian string
// * trim()                   | Menghapus whitespace di depan dan belakang string


var_dump(join("," , [1,2,3,4,5]));
var_dump(explode(" " , "Thomas Alberto"));
var_dump(strtolower("THOMAS ALBERTO"));
var_dump(strtoupper("thomas alberto"));
var_dump(substr("Thomas" , 0 , 4));
var_dump(trim("         Thomas          "));

