<?php

// Todo Break & Continue
// * Pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch
// * Sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan.
// * Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya


// Todo Break
$break = 1;

while (true) {
    echo "Ini adalah program break ke-$break" . PHP_EOL;
    $break++;

    if ($break > 10) {
        break;
    }
}


// Todo Continue
for ($continue = 0; $continue <= 100; $continue++) {
    if ($continue % 2 == 0) {
        continue;
    }

    echo "Ini adalah program continue ke-$continue" . PHP_EOL;
}
