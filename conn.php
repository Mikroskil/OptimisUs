<?php
$mysqli = mysqli_connect("localhost", "root", "nagasakti", "korupsi");
	
if(mysqli_connect_errno()) {
	printf("Koneksi Database gagal %s\n", mysqli_connect_error());
	exit();
}
?>