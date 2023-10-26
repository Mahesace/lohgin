<?php 
//menghubungkan dengan file koneksi
include "koneksi.php";



//cara menangkap data yang dikirim dari form
if(isset($_POST["input"])){
    $id = $_POST["id"];
    $username =$_POST["username"];
    $password =$_POST["password"];

    //ambil data daridatabase tabel login dengan usernmae dan passwrd yng sesuai
    $data = mysqli_query("SELECT *FROM login WHERE id='$id' AND username='$username' AND password='$password'");

if(mysqli_num_rows($data)){
    echo"login Berhasil";
}else{
    echo"login GAGAl";

} ?>