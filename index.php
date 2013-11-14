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
	body{width: 100%; height: 100%; margin: 0; padding: 0; font-family: "Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif; letter-spacing: 0;} .clearFloating{clear: both;} .encaps-main-contents{background-color: rgb(255,255,255); display: block; height: auto; min-height: 100px; margin: 0 auto; padding: 10px 10px 5px 10px; width: 92%; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; box-shadow: 0 0 3px silver;}
	/*adding style to left-main-contents*/
	#left-main-contents{width: 48%; height: auto; padding: 10px; position: relative; display: inline-block;} #description-app{width: 98%; height: auto; padding: 8px; margin:0;} #description-app header{width: 100%; height: auto; text-align: center; margin: 0; padding:0;} #description-app header h2, h4{margin:0; padding: 0; position: relative; display: block;}
	/*adding style to right-main-contents*/
	#right-main-contents{width: 48%; height: auto; padding: 10px; position: relative; display: inline-block;} #right-main-contents header h2, h3{font-family: lobsterTwo, sans-serif;} #vendorSession > article {letter-spacing: 0; text-align: justify;} .info-right > header h2, h3{color: rgba(78, 172, 239, 0.94);}
	/*adding style to footer*/
	.footer-divider{width: 91%; height: auto; padding: 10px 0; margin: 0; margin-top: 57px; position: relative;}
	.footer-information{display: block; height: auto; min-height: 100px; margin: 0 auto; padding: 5px 10px; width: 92%; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; color: rgba(58, 52, 68, 0.647); text-shadow: 1px 1px 1px rgba(210, 210, 210, 0.7);} #developer ul {height: auto; margin: 10px 0 0 5px; padding: 0; width: 18%;} #developer li {border-bottom: 1px dotted; list-style: none outside none; margin: 2px; width: 100%;}
	</style>
	<!--[if IE]>
       	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<header class="page-encaps">
		<div id="kapsul-navigasi">
			<nav>
				<ul><li><a href="index.php">Beranda</a></li><li><a href="pages/rilis.php">Terbaru</a></li><li><a href="guide.php">Panduan</a></li><li><a href="tos.php">Aturan Berlaku</a></li></ul>
			</nav>
		</div>
		<div id="kapsul-judul"><h1>Aplikasi Pencari KORUPSI Medan</h1></div>
	</header><br class="clearFloating">
	<div class="encaps-main-contents">
		<div id="left-main-contents">
			<section id="description-app">
				<header>
					<hgroup>
						<h2>APLIKASI</h2><h2>PENCARI KORUPSI</h2><h4>(KOST RUMAH PENGINAPAN SEKITAR)</h4><h2>MEDAN</h2>
					</hgroup>
				</header>
			</section>
		</div>
		<div id="right-main-contents">
			<section class="info-right" id="vendorSession">
				<header>
					<h2>Penyedia?</h2>
				</header>
				<article>
					<p>Anda memiliki rumah dan inigin menjualnya/menyewakannya? atau Anda penyedia kamar kost yang ingin mencari penyewa kamar kost Anda? atau Anda sebagai penyedia kamar penginapan (Hotel)?<br>Silahkan login atau mendaftar untuk bergabung bersama kami dan beritahu kepada orang-orang tentang yang Anda sediakan kepada mereka.</p>
				</article>
				<section id="sign-up">
					<form name="sign-up">
						<input type="button" value="masuk"><input type="button" value="daftar">
					</form>
				</section>
			</section>
			<section class="info-right" id="finderSession">
				<header>
					<h3>Mencari?</h3>
				</header>
				<article>
					<p>Anda sedang mencari tempat kost, rumah, penginapan hotel yang berada di sekitar lokasi Anda sekarang?<br></p>
				</article>
				<section id="finder">
					<select>
						<option value="rumah"> Rumah </option>
						<option value="penginapan"> Penginapan </option>
						<option value="kost"> Kost </option>
					</select><input type="submit" name="cari-tempat" id="cari-tempat" value="Cari">
				</section>
			</section>
		</div>
	</div><br class="clearFloating">
	<div class="footer-divider">
	<footer class="footer-information">
		<section id="developer">
			<article>Pengembang Aplikasi :<br>
			<ul><li>Hendro Pramana Sinaga</li><li>Putra Jaya Kesuma</li></ul>
		</section>
		<section id="contact-us">
		</section>
		<section id="copyright">
		</section>
	</footer>
	</div>
</body>
</html>