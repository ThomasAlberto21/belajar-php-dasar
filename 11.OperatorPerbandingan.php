<?php

// Todo Operator perbandingan
// * Operator perbandingan, seperti namanya, digunakan untuk membandingan dua buah value
// * Hasil dari operator perbandingan adalah boolean, true jika perbandingannya benar, false jika perbandingannya salah


// Todo
// * $a == $b      |  Sama dengan                    |  true jika $a sama dengan $b setelah dilakukan konversi tipe data

// * $a === $b     |  Identik                        |  true jika $a sama dengan $b dan memiliki tipe data yang sama

// * $a != $b      |  Tidak sama dengan              |  true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data

// * $a !== $b     |  Tidak identik                  |  true jika $a tidak sama dengan $b atau tidak sama tipe data

// * $a < $b       |  Kurang dari                    |  true jika $a kurang dari $b

// * $a <= $b      |  Kurang dari atau sama dengan   |  true jika $a kurang dari atau sama dengan $b

// * $a > $b       |  Lebih dari                     |  true jika $a lebih dari $b

// * $a >= $b      |  Lebih dari sama dengan         |  true jika $a lebih dari atau sama dengan $b


// Todo Sama Dengan (TRUE , karena Jika nilai nya sama maka true dan jika nilai nya tidak sama maka false walaupun berbeda tipe data nya)
var_dump("10" == 10);

// Todo Identik (FALSE , karena Jika tipe data dari nilai tersebut sama maka true jika tipe data nya berbeda maka akan false)
var_dump("10" === 10);

// Todo Tidak Sama Dengan (FALSE , karena nilai nya sama)
var_dump("10" != 10);

// Todo Tidak Identik (TRUE , karena tipe data dari nilai tersebut berbeda)
var_dump("10" !== 10);

// Todo Kurang Dari (FALSE , Karena nilai 10 lebih besar dari 9 )
var_dump(10 < 9);

// Todo Lebih dari (TRUE , karena nilai 10 lebih besar dari 9 )
var_dump(10 > 9);

// Todo Lebih Dari sama dengan (TRUE , karena nilai 10 sama dengan 10)
var_dump(10 >= 10);
