<?php

// Todo Ternary Operator
// * Kadang ada kasus kita butuh melakukan pengecekan kondisi menggunakan if statement, lalu jika benar kita ingin memberi nilai terhadap variable dengan nilai X dan jika salah dengan nilai Y
// * Penggunaan if statement pada kasus seperti bisa dipersingkat menggunakan ternary operator
// * Ternary operator menggunakan kata kunci ?(if) dan :(else)
// * Hanya bisa digunakan untuk if dan juga else


$gender = "WANITA";
$salam = $gender == "PRIA" ? "HI BRO!" : "HAI NONA";

echo $salam . PHP_EOL;
