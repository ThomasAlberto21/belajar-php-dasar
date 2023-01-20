<?php

// Todo
// * Variable adalah tempat untuk menyimpan data sehingga bisa kita gunakan lagi di kode program selanjutnya
// * Di PHP variable bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe data
// * Untuk membuat variable kita bisa menggunakan tanda $ (dolar) diikuti dengan nama variable nya
// * Penamaan variable tidak boleh mengandung spasi

// Todo Pembuatan string cara pertama
$nama = "Thomas Alberto";
$kelas = "12.1B.30";
$nim = 12221355;

echo "Name \t: ";
echo $nama;
echo "\n";

echo "Kelas \t: ";
echo $kelas;
echo "\n";

echo "Nim \t: ";
echo $nim;
echo "\n";

echo "=====================";
echo "\n";

// Todo pembuatan string yang kedua menggunakan Variable Variables (Tidak diwajibkan)
// * PHP memiliki kemampuan variable variables, yaitu membuat variable dari string value variable
// * Walaupun fitur ini ada, tapi fitur ini sangat membingungkan jika digunakan secara luas, jadi disarankan untuk tidak menggunakan fitur ini kecuali memang diperlukan
// * Untuk membuat variable dari value variable kita bisa menggunakan $$ diikuti dengan nama variable nya

$nama = "Thomas";
$$nama = "Ganteng";

echo "Nama \t: ";
echo $nama;
echo "\n";

echo "Thomas \t: ";
echo $Thomas;
echo "\n";