<?php

include "koneksi.php";

if(isset($_POST['nim'])){
    $nim = $_POST['nim'];
}

$hasil = mysqli_query($kon,"delete from mahasiswa where nim = '".$nim."'");
?>