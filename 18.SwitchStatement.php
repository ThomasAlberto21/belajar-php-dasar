<?php

// Todo Switch Statement
// * Kadang kita hanya butuh menggunakan kondisi sederhana di if statement, seperti hanya menggunakan perbandingan ==
// * Switch adalah statement percabangan yang sama dengan if, namun  lebih sederhana cara pembuatannya
// * Kondisi di switch statement hanya untuk perbandingan ==



$nilai_uas = "C";


switch($nilai_uas){
    case "A";
        echo "Anda lulus dengan nilai terbaik";
        break;
    case "B";
        echo "Anda lulus dengan nilai baik";
        break;
    case "C";
        echo "Anda lulus dengan nilai pas-pasan";
        break;
    case "D";
        echo "Harap perbaiki nilai nya lagi";
        break;
    case "E";
        echo "Maaf anda tidak lulus";
        break;
}