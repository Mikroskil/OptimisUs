<?php
if(isset($_REQUEST['email']))
{
    $email = $_REQUEST['email'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Step 2 - Verifikasi Email</title>
    </head>
    <body>
        <header><h2>Verifikasi Email Anda!</h2></header>
        <article><p>Kami telah mengirimi tautan verifikasi akun ke email Anda <?php echo $email; ?>.<br>Silahkan cek email Anda, dan klik tautan untuk memferifikasi Akun Anda.</,br></p></article>
    </body>
</html>
<?php
} else {
    echo "<h2>Sorry...</h2>";
}
?>
