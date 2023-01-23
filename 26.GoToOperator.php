<?php

// Todo Go To Operator
// * Salah satu fitur yang sebenarnya jarang sekali digunakan di PHP adalah goto operator
// * Kenapa jarang digunakan , karena jika terlalu banyak menggunakan goto operator, kode program aplikasinya akan mudah membingungkan yang membaca kode nya
// * goto adalah fitur dimana kita bisa loncat ke kode program sesuai dengan keinginan kita
// * Agar goto bisa loncat ke kode program, kita harus membuat label di php dengan menggunakan nama label lalu diakhiri : (colon)


// Todo Go To Sederhana
goto a;
echo "Hello World" .PHP_EOL;


a:
echo "Hello a" . PHP_EOL;



// Todo Go To di operator loop (Hampir sama dengan break yaitu untuk menghentikan program)
$counter = 1;

while(true){
    echo "Hello loop $counter" . PHP_EOL;
    $counter++;
    if($counter > 10){
        goto end;
    }
}


end:
echo "Hello Go To" . PHP_EOL;