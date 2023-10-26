<?php
$koneksi = mysqli_connect("localhost","root","","regitrasi");

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$email = $_POST['email'];
$jeniskelamin = $_POST['jeniskelamin'];
$agama = $_POST['agama'];
$komentar = $_POST['komentar'];
$submit = $_POST['submit'];


$query = "iINSERT INTO registrasi values('$nama','$umur','$email','$jeniskelamai','$agama','$komentar','$submit')";
mysqli_query($koneksi, $query);    ?>