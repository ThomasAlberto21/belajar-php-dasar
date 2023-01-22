<?php

// Todo For Loop
// * For adalah salah satu kata kunci yang bisa digunakan untuk melakukan perulangan
// * Blok kode yang terdapat di dalam for akan selalu diulangi selama kondisi for terpenuhi


// Todo Sintak Perulangan For
// for(init statement; kondisi; post statement){
// block perulangan
// }

// * Init statement akan dieksekusi hanya sekali di awal sebelum perulangan
// * Kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti
// * Post statement akan dieksekusi setiap kali diakhir perulangan
// * Init statement, Kondisi dan Post Statement tidak wajib diisi, jika Kondisi tidak diisi, berarti kondisi selalu bernilai true


// Todo Perulangan Tanpa Henti
for (;;) {
    echo "Halo ini adalah for loop" . PHP_EOL;
}


// Todo Perulangan Dengan Kondisi
$perulangan_tanpa_henti = 1;

for (; $perulangan_tanpa_henti <= 10;) {
    echo "Ini adalah perulangan dengan kondisi ke-$perulangan_tanpa_henti" . PHP_EOL;
    $perulangan_tanpa_henti++;
}


// Todo Perulangan Dengan Init Statement
for ($perulangan_dengan_init_statement = 1; $perulangan_dengan_init_statement <= 10;) {
    echo "Ini adalah perulangan dengan init statement ke-$perulangan_dengan_init_statement" . PHP_EOL;
    $perulangan_dengan_init_statement++;
}

// Todo Perulangan Dengan Post Statement
for ($perulangan_dengan_post_statement = 1; $perulangan_dengan_post_statement <= 10; $perulangan_dengan_post_statement++) {
    echo "Ini adalah perulangan dengan post statement ke-$perulangan_dengan_post_statement" . PHP_EOL;
}
