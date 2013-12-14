<?php
session_start();
include("../conn.php");
//getInfo="+nodeId+"&getVal="+val;
switch ($_SERVER["REQUEST_METHOD"]) {
	case 'POST':
		if(isset($_REQUEST['getInfo']) && isset($_REQUEST['getName']) && isset($_REQUEST['getVal'])) :
			$id = $_REQUEST['getInfo'];
			$val = $_REQUEST['getVal'];
			$mails = $_REQUEST['getName'];
			$infoProvider = array("namaDepan", "namaBelakang", "email",  "alamat", "nomHp", "nomTelp");
			$qEdit = "UPDATE provinfo SET $id = '$val' WHERE email = '$mails'";
			$hasil = mysqli_query($mysqli, $qEdit) ? 'sk227h' : mysqli_errno($mysqli);
			echo $hasil;
			/*for($i = 0; $i < count($infoProvider); $i++)
			{
				if($id == $infoProvider[$i]) {
					$qEdit = "UPDATE provinfo SET $infoProvider[$i] = '$val' WHERE $infoProvider[$i] = '$id'";
					$hasil = mysqli_query($mysqli, $qEdit) ? 'sk227h' : mysqli_errno($mysqli);
					echo $hasil;
				}
			}*/
		endif;
		break;
	default :
		echo "";
		break;
}
?>