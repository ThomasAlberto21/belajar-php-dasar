<?php

// Todo Expression
// * Expression adalah bagian terpenting di PHP
// * Di PHP, hampir semua kode yang kita tulis adalah sebuah expression
// * Secara sederhana, expression adalah apapun yang memiliki nilai atau value
// * Jadi apapun kode yang bernilai atau mengembalikan value disebut expression



// Todo Expression Sederhana
// * $a = 5; Ketika kita menuliskan “5”, maka tentu itu adalah nilai, oleh karena itu 5 tersebut adalah expression.
// * Lalu kita menulis kode $b = $a; $a bisa kita bilang adalah expression, karena $a adalah nilai 5

$a = 5;
$b = $a;
var_dump($b);


// Todo Expression komplex
// * Pada kode dibawah, getValue() adalah expression, karena getValue() bernilai angka 100

function getValue()
{
    return 100;
}

$value = getValue();



// Todo Statement
// * Statement bisa dibilang adalah kalimat lengkap dalam bahasa.
// * Sebuah statement berisikan execution komplit, biasanya diakhiri dengan titik koma

$name = "Thomas Alberto";
echo $name;


// Todo Block
// * Block adalah kumpulan statement yang terdiri dari nol atau lebih statement.
// * Block diawali dan diakhiri dengan kurung kurawal { }


function runApp($name)
{
    echo "start program" . PHP_EOL;
    echo "hello $name"   . PHP_EOL;
    echo "end program" . PHP_EOL;
}
