<?php

// Todo Tipe data null
// * Nilai NULL merepresentasikan sebuah variable tanpa nilai.
// * Saat kita membuat variable, lalu ingin menghapus data yang terdapat di variable tersebut, kita bisa menggunakan NULL untuk mengosongkan variable tersebut
// * Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insensitive)


$nama = "Thomas Alberto";
$nim = null;


echo "Nama \t :";
echo $nama;
echo "\n";

echo "Nim\t :";
echo $nim;
echo "\n";


echo "===================";
echo "\n";

// Todo Mengecek Apakah Data NULL
// * Kadang kita ingin tahu apakah sebuah data bernilai null atau tidak
// * Untuk mengecek apakah sebuah data bernilai null, kita bisa menggunakan function is_null($variable)

$nama = "Thomas";
echo "Nama \t : ";
var_dump(is_null($nama));
echo "\n";


echo "Nim \t : ";
var_dump(is_null($nim));
echo "\n";



// Todo Menghapus Variable
// * Selain mengubah menjadi NULL, di PHP juga kita bisa menghapus sebuah variable, caranya dengan menggunakan function unset($variable)
// * Namun hati-hati, ketika kita hapus variable, kita tidak bisa lagi mengakses variable tersebut, bahkan function is_null($variable) pun akan menjadi error jika mengakses variable tersebut.
// * Agar lebih aman, kita bisa menggunakan function isset($variable) untuk mengeccek apakah sebuah variable ada dan nilainya tidak NULL

$name = "Thomas";
unset($name);
var_dump(isset($name));
echo "\n";

$name = "Thomas";
var_dump(isset($name));
echo "\n";