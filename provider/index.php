<?php
session_start();
include("../conn.php");
if(isset($_SESSION['provider']))
{
	//session_decode($_SESSION['provider']);
	//$fname = convert_uudecode($_SESSION['name']);
    $mail = $_SESSION['provider'];
	$mail = convert_uudecode(urldecode($mail));
	$ids = mysqli_real_escape_string($mysqli, $mail);
	$q = "SELECT * FROM provinfo WHERE email LIKE '$mail'";
	if($qResult = mysqli_query($mysqli, $q))
	{
		$qFetch = mysqli_fetch_assoc($qResult);
		$fName = $qFetch['namaDepan'];
		$lName = $qFetch['namaBelakang'];
		$alamat = $qFetch['alamat'];
		$hp = $qFetch['nomHp'];
		$telp = $qFetch['nomTelp'];
		$tglGabung = $qFetch['tgl_gabung'];
				
	} else {
		echo "<h4>Error Code : " . mysqli_errno($mysqli) . "</h4><p>Segera hubungi webmaster website ini.</p>";
		exit;
	}
    
?>
<!doctype html>
<html>
<head>
	<title></title>
    <style type="text/css">
	body{background-color: rgba(222,222,222,0.938); width:100%; height:100%; margin:0; padding:0;}
        #header-prov{background-color: #444; box-shadow: 0 1px 2px dimgray; color: rgba(255, 253, 253, 0.96); width:100%; height:35px; position:fixed; display:block; margin:0; padding:0; z-index:10;} header-prov h3, header-prov nav#prov{} #header-prov h3{color:rgba(250,250,254,0.96); position:relative; display: inline-block; width:40%; height:100%; margin:0; padding:0; margin-left:20px;} #header-prov nav#prov{width: 30%; height:100%; right: 60px; position:absolute; display:inline-block; text-align:right;} #header-prov #prov span{width:14%; top:10px; position:fixed; margin:0; padding:0; display:block; text-align:right;} #header-prov nav#prov ul#navProv{margin:0; padding:0; position:relative; display:block; width: 50%; text-align:left; top: 10px; left:198px;} nav#prov ul#navProv li#info{list-style:none; display: inline; margin:0;} ul#navProv li#info:hover{cursor: pointer;} #header-prov nav#prov a{color: #fff; text-decoration:none;} ul#ul-link{width:100%; height:100%; margin:0; padding:0; width:100%; margin-top: 6px; position: relative; display:block;} ul#ul-link li{list-style:none; position:relative; display:none; margin: 0; padding: 0; background-color: rgba(70,85,219,0.91);} /*wrap-body-provider*/ #wrap-body-provider{width: 81%; height: auto; margin: 0 auto; display: block; position: relative; padding: 6px;} /*info-provider session*/ #info-provider{width: 75.6%; height: auto; min-height: 100px; background-color: #46E389; display: inline-block;} /*end info-provider*/ /*profile-provider session*/ #profile-provider{width: 24%; min-height: 100px; /*background-color: rgba(102,153,204,0.914);*/ background-color: #fff; box-shadow: 0 0 2px papayawhip; display: inline-block;} /*end profile-provider*/ .caption-session{width: 100%; position: relative; background-color: #ddd; padding: 5px 0;} .caption-session h3{margin: 6px;}
    </style>
    <link rel="stylesheet" href="../jskonf/jquery-1.8.3.min.js" type="text/javascript">
    <script type="text/javascript" src="../jskonf/jquery-1.8.3.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function(e) {
			var x = false;
			$("#info").click(function(e) {
				if(x == false) {
					$("#ul-link li").slideDown(300);
					x = true;
				} else {
					$("#ul-link li").slideUp(300);
					x = false;
				}
			});
		});
	</script>
</head>
<body>
    <header id="header-prov">
    <div style="width: 80%; height: 100%; margin: 0 auto; padding: 0;">
    	<h3>Penyedia Korupsi</h3>
        <nav id="prov">
        	<span>Selamat Datang, </span>
        	<ul id="navProv">
            	<li id="info"><?php echo $fName . ' ' . $lName; ?>
                <ul id="ul-link">
                	<li><a href="../logout.php">Log Out</a></li>
                </ul>
                </li>
			</ul>
		</nav>
    </div>
    </header><br style="clear: both;">
    <div style="width:100%; margin:0; padding:15px 0; height:100%; position:relative; top: 35px;">
        <div id="wrap-body-provider">
        <aside id="profile-provider">
        	<div style="70%; height: auto; padding:0; margin:10px auto !important;"><img src="../img/profile_avatar.png" alt="profile" width="110" height="110" style="position: relative; border-radius: 50%; display:block; margin:0 auto;" /></div>
        </aside>
        <article id="info-provider">
        	<div style="width: 99%; height: 99%; position: relative; display: table; margin: 5px auto; background-color: #eee;">
            	<header class="caption-session"><h3>Informasi Akun</h3></header>
                <section class="row-table-info">
                	<ul class="ulist">
                    <li>
                    	<ol class="list-info">
                        <li>Nama Depan :</li>
                        <li id="fName"><?php echo $fName ?></li>
                        </ol>
                    </li>
                    </ul>
                    <ul class="ulist">
                    <li>
                    	<ol class="list-info">
                        <li>Nama Depan :</li>
                        <li id="fName"><?php echo $fName ?></li>
                        </ol>
                    </li>
                    </ul>
                </section>
            </div>
        </article>
        </div>
    </div>
</body>
</html>
<?php
} else {
    echo "<h2>Forbidden Page</h2>";
    exit;
}
?>