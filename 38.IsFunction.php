<?php

// Todo Is Function
// * PHP memiliki banyak sekali function dengan prefix is_
// * Function-function ini rata-rata digunakan untuk mengecek tipe data dari sebuah data
// * https://www.php.net/manual/en/ref.var.php 


// Todo
// * is_string()      | Apakah tipe data string
// * is_bool()        | Apakah tipe data boolean
// * is_int()         | Apakah tipe data number integer
// * is_float()       | Apakah tipe data number floating point
// * is_array()       | Apakah tipe data array
// * is_callable()    | Apakah tipe data callable
// * is_null()        | Apakah tipe data null


$data = "Thomas";

var_dump(is_string($data));
var_dump(is_int($data));
var_dump(is_float($data));
var_dump(is_array($data));
var_dump(is_callable($data));
var_dump(is_null($data));