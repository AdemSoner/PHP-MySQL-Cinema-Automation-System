<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/png" href="../img/sinem.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema vakti Admin paneli</title>
</head>

<body>
<?php
ini_set("display_errors",0);// Sayfadaki hataları göstermez.
session_start();
if($_SESSION["giristuru"]=="admin" || $_SESSION["giristuru"]=="boss")
{ }
else
	header("refresh:0;url=../index.php");
?>
</body>
</html>