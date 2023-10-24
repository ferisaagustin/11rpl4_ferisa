<?php 
$koneksi = mysqli_connect("localhost","root","","11rpl4_12_risa");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>