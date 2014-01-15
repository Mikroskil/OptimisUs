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
	$q = "SELECT namaDepan, namaBelakang, tgl_gabung FROM provinfo WHERE email LIKE '$ids'";
	if($qResult = mysqli_query($mysqli, $q))
	{
		$qFetch = mysqli_fetch_assoc($qResult);
		$fName = $qFetch['namaDepan'];
		$lName = $qFetch['namaBelakang'];
		$tglGabung = $qFetch['tgl_gabung'];
		/*$alamat = $qFetch['alamat'];
		$hp = $qFetch['nomHp'];
		$telp = $qFetch['nomTelp'];
		$tglGabung = $qFetch['tgl_gabung'];*/
				
	} else {
		echo "<h4>Error Code : " . mysqli_errno($mysqli) . "</h4><p>Segera hubungi webmaster website ini.</p>";
		exit;
	}
    
?>
<!doctype html>
<html>
<head>
	<title>Provider - <?php echo $fName . ' ' . $lName; ?></title>
    <style type="text/css">
	body{background-color: rgba(222,222,222,0.938); width:100%; height:100%; margin:0; padding:0; position: relative; display: block;}
        #header-prov{background-color: #444; box-shadow: 0 1px 2px dimgray; color: rgba(255, 253, 253, 0.96); width:100%; height:35px; position:fixed; display:block; margin:0; padding:0; z-index:10;} header-prov h3, header-prov nav#prov{} #header-prov h3{color:rgba(250,250,254,0.93); position:relative; display: inline-block; width:40%; height:100%; margin:0; padding:0; margin-left:20px; top:6px;} #header-prov nav#prov{width: 30%; height:100%; right: 40px; position:absolute; display:inline-block; text-align:right; font-size: 16px; color:rgba(91%, 91%, 91%, 0.895483);} #header-prov #prov span{width:14%; top:10px; position:fixed; margin:0; padding:0; display:block; text-align:right;} #header-prov nav#prov ul#navProv{margin:0; padding:0; position:relative; display:block; width: 50%; text-align:left; top: 10px; left:198px;} nav#prov ul#navProv li#info{list-style:none; display: inline; margin:0;} ul#navProv li#info:hover{cursor: pointer;} #header-prov nav#prov a{color: #fff; text-decoration:none;} ul#ul-link{width:100%; height:100%; margin:0; padding:0; width:100%; margin-top: 6px; position: relative; display:block;} ul#ul-link li{list-style:none; position:relative; display:none; margin: 0; padding: 0; background-color: rgba(70,85,219,0.91);} /*wrap-body-provider*/ #wrap-body-provider{width: 81%; height: auto; margin: 0 auto; display: table; position: relative; padding: 6px;} /*info-provider session*/ #info-provider{width: 75.6%; height: auto; min-height: 100px; display: table-cell; position:relative;} /*end info-provider*/ /*profile-provider session*/ #profile-provider{width: 24%; min-height: 100px; /*background-color: rgba(102,153,204,0.914);*/ background-color: #fff; box-shadow: 0 0 2px papayawhip; display:table-cell;} /*end profile-provider*/ .caption-session{width: 100%; position: relative; background-color: darkseagreen; padding: 5px 0; display:block;} .caption-session h3{margin: 6px;} .row-table-info{background-color: #fff; margin:0; padding:0; position: relative; display: inline-block; width: 100%;} /*info listing*/ .ulist{margin:6px 0; padding: 10px 0; position: relative; width: 100%; display:block;} .ulist .listing-list{display: inline-block; height: 55px; list-style: none; margin: 8px; padding: 0; position: relative; width: 259px;} .listing-list ol.list-info{height: 100%; width: 100%; margin: 0; padding: 0;} .list-info > li{display: block; list-style: none;} /*end info lisitng*/ .info-side-profile{width: 50%; margin: 0 auto; position: relative; display: block; text-align:center; /*top:-60px;*/} .edit-info{color: rgba(233,233,233,0.915);} .edit-info:hover{color: rgba(73,73,73,0.837); cursor: pointer;}
        #map-canvas {width: 98% !important; height: 450px !important; display: block !important; position: relative !important; margin: 0 auto !important; padding: 0px; }
		#hidden-editor-map{width: 62%; height: 360px; background-color: rgba(255, 255, 255, 0.927); color: rgba(10%, 10%, 10%, 0.935); position:absolute; display:none; box-shadow:0 0 4px rgba(36%, 36%, 36%, 0.84917); top:45%; left:20%; z-index:5;}
    </style>
    <link rel="stylesheet" href="../jskonf/jquery-1.8.3.min.js" type="text/javascript">
    <link rel="stylesheet" href="../csskonf/prov.css" type="text/css" media="screen" />
    <script type="text/javascript" src="../jskonf/handle.package.js"></script>
    <script type="text/javascript" src="../jskonf/jquery-1.8.3.min.js"></script>
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&libraries=places"></script> -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCzlHCCRv26lN0idv47Mh6-scMsT8wzyis&v=3&sensor=false"></script>
    <script>
var geocoder;
var map;
var addition = 0;
function initialize() {
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(3.5833, 98.6667);
  var mapOptions = {
    zoom: 12,
    center: latlng,
	mapTypeId:google.maps.MapTypeId.ROADMAP,
	mapTypeControl:true,
  	mapTypeControlOptions: {
	  style:google.maps.MapTypeControlStyle.DROPDOWN_MENU
    },
  }
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  
  google.maps.event.addListener(map, 'click', function(event) {
	  if(addition == 0) {
		placeMarker(event.latLng);
		addition += 1;
		} else {
	  alert("Silahkan lengkapi map anda sebelumnya");
  		}
  });
 
}

function placeMarker(location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map,
	title: 'Klik untuk melengkapi info map Anda'
  });
  /*var infowindow = new google.maps.InfoWindow({
    content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
  });
  infowindow.open(map,marker);*/
  
  alert('Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng());
  google.maps.event.addListener(marker, 'click',function() {
	  addKoor(location.lat(), location.lng());
	  $('#hidden-editor-map').fadeIn(350);
	  $("#allof").css('opacity', 0.1);
  });
}

function codeAddress() {
  var address = document.getElementById('address').value;
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

function addKoor(lat, lng) {
	var kor1 = document.getElementById("koordinat1");
	var kor2 = document.getElementById("koordinat2");
	kor1.setAttribute("value", lat);
	kor2.setAttribute("value", lng);
}

    </script>
    <script type="text/javascript">
        $(document).ready(function (e) {
            var x = false;
            $("#info").click(function (e) {
                if (x == false) {
                    $("#ul-link li").slideDown(300);
                    x = true;
                } else {
                    $("#ul-link li").slideUp(300);
                    x = false;
                }
            });
        });
		function openEditor(ids) {
			var d = document.getElementById(ids);
			$(d).parent().fadeOut(350);
			$("#allof").css('opacity', 1);
		}
		function getVal(val) {
			alert(val);
		}
		
        //window.onload = function () { var t = document.getElementsByTagName("title").item(0); p =  t.innerHTML = "Profile "; }
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
    <div id="allof">
    <div style="width:100%; display:block; margin:0; padding:15px 0; height:100%; position:relative; top: 35px;">
        <div id="wrap-body-provider">
        <aside id="profile-provider">
        	<div style="height: auto; padding:0; margin:10px auto !important; position:relative;"><img src="../img/profile_avatar.png" alt="profile" width="110" height="110" style="position: relative; border-radius: 50%; display:block; margin:0 auto;" /></div>
            <div class="info-side-profile"><span id="full-name" style="font-size:22px;"><?php echo "$fName $lName"; ?></span><br>Bergabung Sejak :<br><small><?php echo $tglGabung; ?></small></div>
        </aside>
        <article id="info-provider">
        	<div style="width: 100%; height: 100%; position: relative; display: inline-block; margin-left: 0.5px; background-color: #eee; box-shadow:0 0 3px rgba(199,199,199,0.857);">
            	<header class="caption-session"><h3>Informasi Akun</h3></header>
                <section class="row-table-info">
                
                	<ul class="ulist">
                    <?php
					$infoProvider = array("namaDepan", "namaBelakang", "email",  "alamat", "nomHp", "nomTelp");
					$infoInit = array("fName", "lName", "mail", "alamat", "noHp", "noTel");
					$infoTampil = array("Nama Depan", "Nama Belakang", "E-mail",  "Alamat", "No. Handphone", "No. Telp");
					$ids = mysqli_real_escape_string($mysqli, $mail);
					$q = "SELECT * FROM provinfo WHERE email LIKE '$ids'";
					if($qResult = mysqli_query($mysqli, $q))
					{
						$qFetch = mysqli_fetch_assoc($qResult);
						/*$fName = $qFetch['namaDepan'];
						$lName = $qFetch['namaBelakang'];
						$alamat = $qFetch['alamat'];
						$hp = $qFetch['nomHp'];
						$telp = $qFetch['nomTelp'];
						$tglGabung = $qFetch['tgl_gabung'];*/
						for($i = 0; $i < count($infoProvider); $i++) :
						echo '<li class="listing-list"><ol class="list-info"><li id="' . $mail. '">'.$infoTampil[$i].' <small class="edit-info" id="'.$infoProvider[$i].'" onClick="editInfo(this.id, this.parentNode.id)">Edit</small></li><li>'. $qFetch[$infoProvider[$i]] .'</li></ol></li>';
						endfor;
								
					} else {
						echo "<h4>Error Code : " . mysqli_errno($mysqli) . "</h4><p>Segera hubungi webmaster website ini.</p>";
						exit;
					}
					?>
                    <!--
                        <li class="listing-list">
                            <ol class="list-info">
                            <li>Nama Depan :</li>
                            <li id="fName"><?php //echo $fName ?></li>
                            </ol>
                        </li>
                        <li class="listing-list">
                            <ol class="list-info">
                            <li>Nama Belakang :</li>
                            <li id="fName"><?php //echo $lName ?></li>
                            </ol>
                        </li>
                    </ul>
                    <ul class="ulist">
                        <li class="listing-list">
                            <ol class="list-info">
                            <li>Nama Depan :</li>
                            <li id="fName"><?php //echo $fName ?></li>
                            </ol>
                        </li>
                        <li class="listing-list">
                            <ol class="list-info">
                            <li>Nama Belakang :</li>
                            <li id="fName"><?php //echo $lName ?></li>
                            </ol>
                        </li> -->
                    </ul>	
                </section>
            </div>
        </article>
        </div>
    </div>
    <section id="mapping-sess">
        <section id="filtering"><form name="collection" action="" method="GET">Pencarian Lokasi <input type="search" class="controls" id="address" placeholder="Ketikkan alamat lokasi" required /> <input type="button" value="Tampilkan" onclick="codeAddress()"></form></section>
        <div id="map-canvas" style="margin: 10px 0;"></div>
        <div style="width:46%; position:relative; display: block; margin:8px 0;"></div>
    </section>
    </div>
    <div id="hidden-editor-map"><span onClick="javascript:openEditor(this.id);" id="closer" class="closeUp">Tutup</span>
    <form name="infoTempat" id="infoTempat">
    <fieldset><legend>Lengkapi Informasi Penyediaan tempat Anda : </legend>
        <label for="alamat-lengkap">Alamat Lengkap : </label><input type="text" id="alamat-lengkap" name="alamat-lengkap" placeholder="Ketikkan alamat lengkap" onKeyUp="javascript:getVal(this.value);" required /><label for="kategori">Pilih Kategori : </label>
        <select name="kategori" id="kategori">
            <option value=""> -- Pilihan -- </option>
            <option value="hotel"> Hotel </option>
            <option value="kontrakan"> Kontrakan </option>
            <option value="kost"> Kost </option>
        </select>
        <label for="koordinat1">Koordinat Awal : </label><input type="text" id="koordinat1" name="koordinate1" readonly /> <label for="koordinat2">Koordinat Akhir : </label><input type="text" id="koordinat2" name="koordinat2" readonly />
        </fieldset>
    </form>
    </div>
</body>
</html>
<?php
} else {
    echo "<h2>Forbidden Page</h2>";
    exit;
}
?>