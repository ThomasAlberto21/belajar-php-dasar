<?php

// Todo String
// * Tipe data string adalah tipe data representasi dari teks
// * String bisa mengandung kosong atau banyak karakter


// Todo Ada 4 cara untuk membuat string :
// * 1.Menggunakan Single Quote (kutip 1)
// * 2.Menggunakan Double Quote (Kutip 2) , Salah satu kelebihan menggunakan double quote adalah, kita menggunakan escape sequence untuk beberapa hal, seperti \n untuk ENTER \t untuk TAB, \” untuk double quote, dan lain-lain
// * 3.Menggunakan Heredoc (fitur untuk membuat String yang panjang, sehingga kita tidak perlu manual melakukan enter, tab dan yang lain-lain secara manual)
// * 4.Menggunakan Nowdoc (Hampir mirip seperti Heredoc , yang membedakan nya adalah Nowdoc tidak memiliki kemampuan untuk parsing seperti di Heredoc atau Double quote)

// Todo Jika menggunakan single quote tidak bisa menggunakan fitur \n(enter) dan \t(tab) , untuk mengatasi masalah tersebut bisa menggunakan double quote

// Todo Jika menggunakan Nowdoc wajib menambahkan single quote 


// * Single Quote
echo 'Nama : ';
echo 'Thomas Alberto';
echo "\n";

echo 'kelas : ';
echo '12.1B.30';
echo "\n";

echo 'Nim : ';
echo '12221355';
echo "\n";

// * Double Quote
echo "Nama \t: ";
echo "Thomas Alberto";
echo "\n";

echo "Kelas \t: ";
echo "12.1B.30";
echo "\n";

echo "Nim \t: ";
echo "1221355";
echo "\n";



// * Heredoc
echo <<<TEXT
Halo perkenalkan nama saya Thomas Alberto
Saya dari kelas 12.1B.30
nim saya 12221355
TEXT;


// * Nowdoc
echo <<<'TEXT'
Halo perkenalkan nama saya Thomas Alberto
Saya dari kelas 12.1B.30
nim saya 12221355
TEXT;
