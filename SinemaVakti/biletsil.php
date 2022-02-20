<?php 
include 'baglanti.php';
include 'kullanicikontrol.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti bilet silme sayfası</title>
</head>
<body leftmargin="500" topmargin="150" background="img/bgadmin.png">
<?php
$biletid =@$_GET["id"];

if($biletid!=""){
	$kontrol = mysqli_query($baglanti,"DELETE FROM biletler where id='".$biletid."'");
	if($kontrol)
		{ echo "Bilet silme başarılı."; header("refresh:2;url=kulsayfasi.php?sayfa=biletlerim"); }
	else
		echo " başarısız.";
	}
	else
		echo " Silmek istenilen salonid mevcut değil, tekrar deneyin.";




?>
</body>
</html>