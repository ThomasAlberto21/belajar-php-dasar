<?php

// Todo Function Return value
// * Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat sebuah function mengembalikan nilai
// * Dan di dalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return, lalu diikuti dengan data yang ingin dihasilkan
// * Kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu


// Todo Return Type Declarations
// * Sama seperti pada argument, pada return value pun kita bisa mendeklarasikan tipe datanya
// * Hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function
// * Untuk mendeklarasikan tipe data kembalian function, setelah kurung () kita bisa tambahkan : diikuti tipe data kembaliannya



// Todo Contoh sederhana
function sum(int $first_number, int $last_number): int // ! Return Type Declarations
{
    $total = $first_number + $last_number;
    return  $total;
}


$total = sum(10, 10);
var_dump($total);


// Todo Contoh komplek
function nilai(int $value): string // ! Return Type Declarations
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}


$score = nilai(70);
var_dump($score);
