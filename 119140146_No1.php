<?php 
function tambah($hasil,$a, $b){ //fungsi penjumlahan
    $hasil = $a + $b;
    echo "<br> PENJUMLAHAN";
    echo "<br> Operator : +";
    echo "<br> Hasil : ", $hasil;        
}
function kurang($hasil,$a, $b){ //fungsi pengurangan
    $hasil = $a - $b;
    echo "<br> PENGURANGAN ";
    echo "<br> Operator : - ";
    echo "<br> Hasil : ", $hasil;
}
function kali($hasil,$a, $b){ //fungsi perkalian
$hasil = $a * $b;
    echo "<br> PERKALIAN ";
    echo "<br> Operator : * ";
    echo "<br> Hasil : ", $hasil;   
}
function bagi($hasil,$a, $b){ //fungsi pembagian
    $hasil = $a / $b;
    echo "<br> PEMBAGIAN";
    echo "<br> Operator : / ";
    echo "<br> Hasil : ", $hasil;
}
function mod($hasil,$a,$b){ //fungsi modulus
    $hasil = $a % $b;
    echo "<br> MODULUS ";
    echo "<br>Operator : % ";
    echo "<br> Hasil : ", $hasil;
}

$hasil = 0;
$a = 10;
$b = 5;

echo "Bilangan 1 = ", $a;
echo "<br>";
echo "Bilangan 2 = ", $b;
echo "<br> <br>";
echo "Berikut merupakan hasil operasi dari kedua bilangan diatas: <br> ";

tambah($hasil,$a,$b);
echo "<br>";
kurang($hasil,$a,$b);
echo "<br>";
kali($hasil,$a,$b);
echo "<br>";
bagi($hasil,$a,$b);
echo "<br>";
mod($hasil,$a,$b);
?>