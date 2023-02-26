<?php 
 
$jaringan = mysqli_connect("localhost","root","","myquizz");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>