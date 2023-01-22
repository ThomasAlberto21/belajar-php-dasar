<?php

// Todo Do While Loop
// * Do While loop adalah perulangan yang mirip dengan while
// * Perbedaannya hanya pada pengecekan kondisi
// * Pengecekan kondisi di while loop dilakukan di awal sebelum perulangan dilakukan, sedangkan di do while loop dilakukan setelah perulangan dilakukan
// * Oleh karena itu dalam do while loop, minimal pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai true


$do_while_loop = 1;

do {
    echo "Ini adalah perulangan do while loop ke-$do_while_loop" . PHP_EOL;
    $do_while_loop++;
} while ($do_while_loop <= 10);
