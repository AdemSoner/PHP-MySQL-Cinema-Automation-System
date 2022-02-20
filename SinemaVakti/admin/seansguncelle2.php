<?php 
include '../baglanti.php';
include '../admin/adminkontrol.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti Seans güncelleme sayfası</title>
</head>
<body leftmargin="500" topmargin="150" background="../img/bgadmin.png">
<?php

$seansid =@$_GET["id"];
$saat= $_POST["saat"];
$fiyat= $_POST["fiyat"];

	if($seansid!="")
	{
	$kontrol = mysqli_query($baglanti,"UPDATE seans SET saat='$saat',fiyat='$fiyat' WHERE seansid='$seansid'");
	if($kontrol)
	{ 
		echo " Seans güncelleme başarılı."; header("refresh:2;url=../admin/adminsayfasi.php?sayfa=seansduzenle"); 
	}
	else
		echo " başarısız.";
	}
	else
		echo " Güncellemek istenilen Seans id mevcut değil, tekrar deneyin.";



?>
</body>
</html>

