<?php
session_start();
//session_decode($_SESSION['provider']);
unset($_SESSION['provider']);
session_destroy();
header("location: http://localhost/project/korupsi/"); 
?>