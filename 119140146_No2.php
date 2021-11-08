<?php

$list_data = ['larine','aduh','qifuat','toda','anevi','samid','kifuat'];

echo "Pengurutan data-data yang acak";
echo "<br><br>";
echo "Sebelum Urut : ";
echo "<br>"; 
$i=0;
foreach($list_data as $data) {
    if($i < count($list_data)-1){
        echo $data." , ";
    }else{
        echo $data;
    }
    $i++;
}

sort($list_data); 

echo "<br> <br>";
echo "Sesudah Urut : ";
echo "<br>";
$i=0;
foreach($list_data as $data) {
    if($i < count($list_data)-1){
        echo $data." , ";
    }else{
        echo $data;
    }
    $i++;
}

?>