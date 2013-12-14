<?php
?>
<!doctype html>
<html lang="ID">
<head>
	<meta charset="utf-8">
	<title>Selamat Datang di Aplikasi Pencari KORUPSI Medan</title>
	<meta name="description" content="Aplikasi Pencari KORUPSI (Kost Rumah Kontrakan Sekitar) Medan"/>
	<meta name="author" content="Aplikasi KORUPSI"/>
	<link rel="stylesheet" type="text/css" href="csskonf/unvrstyle.css">
	<style type="text/css">
	body{width: 100%; height: 100%; margin: 0; padding: 0; font-family: "Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif; letter-spacing: 0;} .clearFloating{clear: both;} .encaps-main-contents{background-color: rgb(255,255,255); height: auto; min-height: 100px; margin: 0 auto; padding: 10px 10px 0; width: 92%; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; box-shadow: 0 0 3px silver; font-size: 14px; color: dimgrey; position: relative; display: flex;}
	#desc{width: 55%; position: absolute; top: 41px; left: 134px; color: rgba(65, 124, 167, 0.92); font-weight: bold; font-size: 13px; transform:skew(20deg,-4deg); -ms-transform:skew(20deg,-4deg); /* IE 9 */ -webkit-transform:skew(20deg,-4deg);}
	/*adding style to left-main-contents*/
	#left-main-contents{width: 47%; height: auto; margin:0; padding: 10px; position: relative; display: inline-block; } #description-app{width: 100%; height: auto; padding: 10px 0; margin:0; position: relative;} #description-app header{width: 100%; height: auto; text-align: center; margin: 0; padding:0; position: relative;} #description-app header h2, h4{margin:0; padding: 0; display: block; font-family: cursive; color: rgba(50%, 50%, 50%, 0.8291);}
	/*adding style to right-main-contents*/
	#right-main-contents{width: 49%; height: auto; background-color: buttonface; box-shadow: 0px 0px 4px 1px buttonface; padding: 10px; position: relative; display: inline-block; margin:-10px 0 0 9px; left: 2px;} #right-main-contents header h2, h3{font-family: lobsterTwo, sans-serif;} #vendorSession > article {letter-spacing: 0; text-align: left;} .info-right > header h2, h3{color: rgba(65, 124, 167, 0.92); font-size: 26px;}  #right-main-contents section:nth-child(2){border-top: 2px dashed slateGray; margin-top: 25px;}

	/*adding style to footer*/
	.footer-information{height: auto; min-height: 110px; margin: 0 auto; width: 92%; padding:10px; color: rgba(58, 52, 68, 0.647); position: relative; display: block; text-shadow: 1px 1px 1px rgba(210, 210, 210, 0.7);} #developer ul {height: auto; margin: 10px 0 0 5px; padding: 0; width: 18%;} #developer li {border-bottom: 1px dotted; list-style: none; margin: 2px; width: 100%;} .footer-information ul>li{line-height: 1.7em;}
	/*fomuser*/
	#logUser{width: 70%; height: auto; padding: 3px 0 10px; margin: 0 auto; top: 35px; background-color: rgba(26, 26, 26, 0.718); border-top-left-radius: 4px; border-top-right-radius: 4px; box-shadow: 0 0 4px #808080;  color: rgba(250, 252, 247, 0.925); padding-bottom: 5px;}
	.foms-user form{width: 96%; height: auto; margin: 0 auto; padding: 10px;} .foms-user span{display: inline-block; position: relative; width: 100%; text-align: center; background-color: #87CEEB; margin:0; left:-2px; padding: 10px 2px; border-top-left-radius: 3px; border-top-right-radius: 3px;} .foms-user form input[type="text"], .foms-user input[type="password"], .foms-user input[type="email"]{width: 91%; margin: 9px 0 11px; height: 25px; border: 0; border-radius: 4px; text-indent: 5px;}
	#regUser{width: 85%; height: auto; padding: 3px 0 10px; margin:0 auto; background-color: rgba(26, 26, 26, 0.7291); border-top-left-radius: 4px; border-top-right-radius: 4px; box-shadow: 0 0 4px #808080;  color: rgba(250, 252, 247, 0.925); display: block; position: relative; padding-bottom: 5px;} #regUser, #logUser{display: none; position: relative;}
	</style>
	<!--[if IE]>
       	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
    <script type="text/javascript" src="jskonf/handle.package.js"></script>
    <script type="text/javascript" src="jskonf/jquery-1.8.3.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$("#loginCancel").click(function(){
    			$(this).parent().parent().slideUp(350);
    			$("#intro").slideDown(300);
    		});
    		$("#regUser form input#loginCancel").click(function(){
    			$(this).parent().parent().slideUp(350);
    			$("#intro").slideDown(300);
    		});
    	});
    </script>
</head>
<body>
	<header class="page-encaps">
		<div id="kapsul-navigasi">
			<nav>
				<ul><li><a href="index.php">Beranda</a></li><li><a href="pages/rilis.php">Terbaru</a></li><li><a href="guide.php">Panduan</a></li><li><a href="tos.php">Aturan Berlaku</a></li></ul>
			</nav>
		</div>
		<div id="kapsul-judul"><h1>Aplikasi Pencari <span style="color:rgba(65, 124, 167, 0.92);">KORUPSI</span> Medan</h1></div><span id="desc">(KOST RUMAH PENGINAPAN SEKITAR)</span>
	</header><br class="clearFloating">
	<div class="encaps-main-contents">
		<div id="left-main-contents" style="background-color:$PageBgColor$">
			<section id="description-app">
				<header>
					<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/korup1.jpg" alt="korup1" title="korup1" id="wows1_0"/></li>
<li><img src="data1/images/korup2.jpg" alt="korup2" title="korup2" id="wows1_1"/></li>
<li><img src="data1/images/korup3.jpg" alt="korup3" title="korup3" id="wows1_2"/></li>
<li><img src="data1/images/korup4.jpg" alt="korup4" title="korup4" id="wows1_3"/></li>
<li><img src="data1/images/korup5.jpg" alt="korup5" title="korup5" id="wows1_4"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="korup1"><img src="data1/tooltips/korup1.jpg" alt="korup1"/>1</a>
<a href="#" title="korup2"><img src="data1/tooltips/korup2.jpg" alt="korup2"/>2</a>
<a href="#" title="korup3"><img src="data1/tooltips/korup3.jpg" alt="korup3"/>3</a>
<a href="#" title="korup4"><img src="data1/tooltips/korup4.jpg" alt="korup4"/>4</a>
<a href="#" title="korup5"><img src="data1/tooltips/korup5.jpg" alt="korup5"/>5</a>
</div></div>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
				</header>
                <div>
                </div>
			</section>
		</div>
		<div id="right-main-contents">
			<div id="intro">
			<section class="info-right" id="vendorSession">
				<header>
					<h2>Penyedia?</h2>
				</header>
				<article>
					<p>Anda memiliki rumah dan inigin menjualnya/menyewakannya? atau Anda penyedia kamar kost yang ingin mencari penyewa kamar kost Anda? atau Anda sebagai penyedia kamar penginapan (Hotel)? Silahkan login atau mendaftar untuk bergabung bersama kami dan beritahu kepada orang-orang tentang yang Anda sediakan kepada mereka.</p>
				</article>
				<section id="sign-up-login" style="position: relative; display: inline; right: -70%;">
					<form name="loginMember" style="display: inline-block; position:relative;">
						<input type="button" name="loginSession" id="loginSession" onclick="proses(this.id)" value="Masuk">
					</form>
					<form name="signUpMember" style="display: inline-block; position:relative;">
						<input type="button" name="signupSession" id="signupSession" onclick="proses(this.id)" value="Daftar">
					</form>
				</section>
			</section>
			<section class="info-right" id="finderSession">
			
				<header>
					<h2>Mencari?</h2>
				</header>
				<p>Anda sedang mencari tempat kost, rumah, penginapan hotel yang berada di sekitar lokasi Anda sekarang? Kami akan membantu Anda tanpa harus menyusuri tepian jalan yang berliku.  Kami menyediakan dua metode pencarian, silahkan tentukan pilihan metode pencarian yang akan Anda gunakan.</p>
				<div class="asTable">
					<div class="cellTable">
						
						<div id="finder">
							<form name="finder">
							<select>
								<option value="rumah"> Rumah </option>
								<option value="penginapan"> Penginapan </option>
								<option value="kost"> Kost </option>
							</select><input type="submit" name="cari-tempat" id="cari-tempat" value="Cari">
							</form>
						</div>
						<article>
							<p>Pilih jenis tempat yang ingin dicari!</p>
						</article>
					</div>
					<div class="cellTable">
					
					<div>
						<form name="finder-filter">
							<div class="divide-form">
							<select>
								<option value=""> -Pilih- </option>
								<option value="rumah"> Rumah </option>
								<option value="penginapan"> Penginapan </option>
								<option value="kost"> Kost </option>
							</select><input type="text" placeholder="ketikkan lokasi pencarian" name="lokasi-pencarian" id="lokasi-pencarian"><input type="submit" name="submitLokasi" id="submitLokasi" value="Cari" /></div>
						</form>
					</div>
					<article><p>Pilih jenis tempat yang ingin dicari, dan tentukan sekitar wilayah mana Anda ingin mencari tempat tersebut.</p></article>
					</div>
				</div>
			</section>
			</div>
			<div class="foms-user" id="logUser">
				<span>LOGIN</span>
				<form action="" name="loginPv" method="POST" onSubmit="logProses(this); return false;">
					<label for="usernamePv">Username :</label><br>
					<input name="usernamePv" id="usernamePv" type="text" required /><br>
					<label for="passPv">Password : </label><br>
					<input type="password" id="passPv" name="passPv" required /><br>
					<input type="submit" value="Login" /> <input type="button" id="loginCancel" value="Batal"><div id="infoLog"></div> 
				</form>
			</div>
			<div class="foms-user" id="regUser">
				<span>SIGN UP</span>
				<form action="" name="signUpPv" method="POST" onSubmit="validateReg(this); return false;">
					<span style="width:47.5%; position:relative; display: inline-block; background-color: transparent; text-align:left; margin-bottom:5px !important; height: auto; padding: 0 !important;"><label for="firstName">Nama Depan :</label>
					<input name="firstName" id="firstName" type="text" placeholder="Cth. hendro atau hendro.pramana" required /><small></small></span>
					<span style="width:47.5%; position:relative; display: inline-block; background-color: transparent; text-align:left; margin-bottom:5px !important; height: auto; padding: 0 !important;"><label for="lastName">Nama Belakang :</label><br>
					<input name="lastName" id="lastName" type="text" maxlength="10" placeholder="Cth : sinaga" required /><small></small></span><br>
                    <label for="mail">E-mail :</label><br>
                    <input type="text" name="mail" id="mail" placeholder="Cth: namaanda@mail.com" required onfocus="javascript:(this.nextSibling.innerHTML='')" /><small style="display:inline-block; margin-left: 2px; position:relative;"></small><br>
					<label for="newPass">Password : </label><br>
					<input type="password" name="newPass" id="newPass" placeholder="Password Baru Anda" required /><small></small><br>
					<label for="rePass">Ketikkan Ulang Password : </label><br>
					<input type="password" name="rePass" id="rePass" placeholder="Ketikkan Ulang Password" onkeyup="valMail(this.id)" required /><small></small><br>
					<div style="width: 100%; height: auto;"><input style="display: inline-block; position: relative; top: -8px;" type="checkbox" name="agreement" id="agreement" value="Setuju" onClick="funA()"><small style="display: inline-block; position: relative; font-size: 10px; margin-left: 5px; width: 93%;">Dengan mencentang bagian ini, Saya menyatakan setuju dengan aturan dan perjanjian yang berlaku</small></div><br>
					<input type="submit" name="submit" disabled="disabled" value="Login" /> <input type="button" id="loginCancel" value="Batal"><span id="info" style="background-color: transparent !important; position: relative; display: inline-block; width: auto; height: auto; top: 10px;"></span>
				</form>
			</div>
		</div>
	</div>
	<footer class="footer-information">
		<div class="footer-divider">
			<section id="developer">
				<article>Pengembang Aplikasi :<br>
				    <ul><li>Hendro Pramana Sinaga</li><li>Putra Jaya Kesuma</li></ul>
                </article>
			</section>
			<section id="contact-us">
			</section>
			<section id="copyright">
			</section>
		</div>
		<section id="copyright">
			Copyright &copy; 2013 - 2014  ALL RIGHT RESERVED 
		</section>
	</footer><br>
</body>
</html>