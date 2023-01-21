<?php

// Todo Operator Logika
// * Operator logika adalah operator untuk membandingkan dua nilai boolean
// * Hasil dari operator logika adalah boolean lagi


// Todo
// * $a && $b    | And     | true jika $a dan $b keduanya true dan jika ada salah satu yang false maka nilai nya FALSE
// * $a || $b    | Or      | true jika $a dan $b salah satu atau keduanya true
// * !$a         | Not     | true jika $a bernilai false dan sebaliknya false jika $a bernilai true 
// * $a xor $b   | Xor     | true jika $a dan $b salah satu true, tapi tidak keduanya


// Todo And
var_dump(true && true);
var_dump(true && false);

// Todo Or
var_dump(true || true);
var_dump(true || false);

// Todo Not
var_dump(!true);
var_dump(!false);

// Todo Xor
var_dump(true xor true);
var_dump(true xor false);