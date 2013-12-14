<?php
session_start();
sleep(2);
include("conn.php");
switch ($_SERVER["REQUEST_METHOD"]) {
	case 'POST':
		if(!$mysqli)
		{
			echo "";
			exit;
		}
		if(isset($_REQUEST['fName']) && isset($_REQUEST['lastName']) && isset($_REQUEST['mail']) && isset($_REQUEST['pass'])):
            
			$firstName = $_REQUEST['fName'];
			$lastName = $_REQUEST['lastName'];
			//$nik = $_REQUEST['nik'];
			$mail = $_REQUEST['mail'];
			$pass = $_REQUEST['pass'];
			$pass .= substr($mail, 2, 2);
			$pass = md5($pass);
			/*$alamat = "";
			$noHp = "";
			$noTelp = "";*/
			$query = "INSERT INTO provinfo VALUES ('$mail', '$firstName', '$lastName', '$pass', NULL, NULL, NULL, now())";
			if($qRes = mysqli_query($mysqli, $query))
			{
				$_SESSION['provider'] = urlencode(convert_uuencode($mail));
				//$_SESSION['name'] = convert_uuencode($firstName);
				echo "provider/?providerToken=".$_SESSION['provider'];
				//echo 'tehe';
			} else {
				echo '00';
			}
		
		elseif(isset($_REQUEST['uml']) && isset($_REQUEST['pass'])):
			$uml = $_REQUEST['uml'];
			$pass = $_REQUEST['pass'];
			$pass .= substr($uml, 2, 2);
			$pass = md5($pass);
			$q = "SELECT email, pass FROM provinfo";
			$sendQuery = mysqli_query($mysqli, $q);
			$boolStatus = false;
			while($fetchQuery = mysqli_fetch_assoc($sendQuery))
			{
				if($uml == $fetchQuery['email'] and $pass == $fetchQuery['pass']){
					$uml = convert_uuencode($uml);
					$boolStatus = true;
					break;
				}
			}
			if($boolStatus == true){
				$_SESSION['provider'] = urlencode($uml);
				echo "provider/?providerToken=".$_SESSION['provider'];
			} else {
				echo "00";
			}
		endif;
		break;
	default:
		echo "00";
		exit();
		break;
}
//echo "okelah...";
?>