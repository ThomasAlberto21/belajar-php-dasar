<?php

// Todo Tipe Data Number
// * Di PHP terdapat 2 jenis tipe data number
// * (int) Bilangan bulat decimal (base 10), hexadecimal (base 16), octa (base 8), binary (base 2) dan
// * (float) Bilangan pecahan
// * Di PHP kita bisa menambahkan _ (garis bawah) di angka, ini hanya untuk agar mudah dibaca, saat dijalankan, _ (garis bawah) tersebut akan di ignore
// * Untuk angka negatif, kita bisa menggunakan tanda - (minus) di depan angka.

// Todo Fungsi var_dumb digunakan untuk mengetahui tipe data dari suatu program yang sudah kita buat


// Todo Tipe data integer
echo "Desimal : "; // * Base(10)
var_dump(1234);

echo "Octal : "; // * Base(8)
var_dump(01234);

echo "Hexadesimal : "; // * Base(16)
var_dump(0x2A);

echo "Binary : "; // * Base(2)
var_dump(0b1111111);

echo "Underscore in number : ";
var_dump(1_234_567_8);



// Todo Tipe data float
echo "Floating Point : ";
var_dump(1.234);

echo "Floating point dengan E notation plus (1.2 X 1000) : ";
var_dump(1.2e3);

echo "Floating point dengan E notation minus (7 X 0.001 : ";
var_dump(7e-3);

echo "Underscore in Floating point : ";
var_dump(1_234.5678);
