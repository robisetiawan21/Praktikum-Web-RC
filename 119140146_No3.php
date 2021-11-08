<?php
function bilPrima($angka){
    $a = 0;
    for($i =  $angka; $i > 0; $i--){
        $mod = $angka % $i;
        if($mod == 0){
            $a++;
        }
    }
    if($a == 2){
        echo $angka," ";    
    }
}

echo "Bilangan Prima : ";
echo "<br>";
for($i = 1; $i <= 50; $i++){
    $hasil = bilPrima($i);
    if($hasil != 0){
        echo $hasil, "  ";
    }
    else{
        echo $hasil;
    }
}

?>