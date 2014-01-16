<?php
include("../conn.php");
sleep(3);
//"&alamat="+alamat; url += "&kate="+kateg+"&kor1="+kor1; url+= "&kor2="+kor2+"&desk="+konten;
$dialog = $_REQUEST['dialog'];
$alamat = $_REQUEST['alamat'];
$kategori = $_REQUEST['kate'];
$kordinat1 = $_REQUEST['kor1'];
$kordinat2 = $_REQUEST['kor2'];
$deskripsi = $_REQUEST['desk'];
$provider = $_REQUEST['provider'];
if($dialog = "dials") :
	$q = "INSERT INTO placesinfo VALUES (NULL, '$provider', '$alamat', '$kategori', '$kordinat1', '$kordinat2', '$deskripsi')";
	if($query = mysqli_query($mysqli, $q)){
		echo '2205';
	} else {
		echo '0010';
	}
else :
	echo "0010";
endif;
?>