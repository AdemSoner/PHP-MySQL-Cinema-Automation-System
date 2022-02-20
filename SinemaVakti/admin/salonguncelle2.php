<?php 
include '../baglanti.php';
include '../admin/adminkontrol.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti salon güncelleme sayfası</title>
</head>
<body leftmargin="500" topmargin="150" background="../img/bgadmin.png">
<?php

$salonid =@$_GET["id"];
$salonismi= $_POST["salonismi"];
$koltuk= $_POST["koltuk"];
if($_SESSION["giristuru"]=='admin' || $_SESSION["giristuru"]=='boss')
{
	if($salonid!=""){
	if($salonismi<10)
		$kontrol = mysqli_query($baglanti,"UPDATE salonlar SET salonismi='SALON0$salonismi',koltuk='$koltuk' WHERE salonid='$salonid'");
	else
		$kontrol = mysqli_query($baglanti,"UPDATE salonlar SET salonismi='SALON$salonismi',koltuk='$koltuk' WHERE salonid='$salonid'");
	if($kontrol)
		{ echo " Salon güncelleme başarılı."; header("refresh:2;url=../admin/adminsayfasi.php?sayfa=salonduzenle"); 
		}
	else
		echo " başarısız.";
	}
	else
		echo " Güncellemek istenilen filmid mevcut değil, tekrar deneyin.";

}

else
{
	echo " Yetkisiz giriş saptandı.";
	header("refresh:1;url=../index.php");
}




?>
</body>
</html>

