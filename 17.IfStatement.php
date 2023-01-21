<?php

// Todo If Statement
// * Dalam PHP, if adalah salah satu kata kunci yang digunakan untuk percabangan
// * Percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi
// * Hampir di semua bahasa pemrograman mendukung if expression

$nilai_uas_thomas = 90;
$nilai_uts_thomas = 85;

if ($nilai_uas_thomas >= 80 && $nilai_uts_thomas >= 80) {
    echo "Selamat Thomas Anda Lulus" . PHP_EOL;
}


// Todo Else Statement
// * Blok if akan dieksekusi ketika kondisi if bernilai true
// * Kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false
// * Hal ini bisa dilakukan menggunakan else statement


$nilai_uas_frans = 50;
$nilai_uts_frans = 75;

if ($nilai_uas_frans >= 80 && $nilai_uts_frans >= 80) {
    echo "Selamat Thomas Anda Lulus" . PHP_EOL;
} else {
    echo "Maaf Frans Anda Tidak Lulus" . PHP_EOL;
}



// Todo Else If Statement
// * Terkadang di dalam If, kita butuh membuat beberapa kondisi
// * Kasus seperti ini, di PHP kita bisa menggunakan Else If statement
// * Else if di PHP bisa lebih dari satu
// * Kode Else if di php bisa menggunakan “else if” atau “elseif” (digabung)

$nilai_uas_narko = 90;
$nilai_uts_narko = 75;

if ($nilai_uas_narko >= 80 && $nilai_uts_narko >= 80) {
    echo "Nilai anda A" . PHP_EOL;
} else if ($nilai_uas_narko >= 70 && $nilai_uts_narko >= 70){
    echo "Nilai Anda B" . PHP_EOL;
} else if ($nilai_uas_narko >= 60 && $nilai_uts_narko >= 60){
    echo "Nilai Anda C" . PHP_EOL;
} else if ($nilai_uas_narko >= 50 && $nilai_uts_narko >= 50){
    echo "Nilai Anda D" . PHP_EOL;
} else {
    echo "Nilai Anda E" .PHP_EOL;
}

