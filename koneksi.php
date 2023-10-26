<?php

$koneksi = mysqli_connect("localhost","root","","lohgin");
if($koneksi){
    echo"koneksi database berhasil";
}else{
    echo "koneksi database gagal";
}







?>