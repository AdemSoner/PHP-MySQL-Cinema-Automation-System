<?php 
include '../baglanti.php';
include '../admin/adminkontrol.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti seans ekleme sayfası</title>
</head>
<body leftmargin="500" topmargin="150" background="../img/bgadmin.png">
<?php
$filmismi = $_POST["filmismi"];
$saat = $_POST["saat"];
$fiyat = $_POST["fiyat"];
$abc=mysqli_fetch_assoc(mysqli_query($baglanti,"SELECT * FROM filmler WHERE filmismi='$filmismi'"));
$filmid=$abc["filmid"];
$salonid=$abc["salonid"];
if($filmismi!="" && $saat !="" && $fiyat!="")
{
	$flag=0;
	$sql=mysqli_query($baglanti,"SELECT * FROM seans WHERE filmid='$filmid' AND saat='$saat'");
	while($result=mysqli_fetch_assoc($sql))
	{
		$flag=1;
	}
	if($flag==0)
	{
	$kontrol = mysqli_query($baglanti,"INSERT INTO seans (filmid,salonid,fiyat,saat) VALUES ('$filmid','$salonid','$fiyat','$saat')");
	if($kontrol)
	{ echo "Seans ekleme başarılı."; header("refresh:2;url=../admin/adminsayfasi.php?sayfa=seansduzenle"); }
	else
		echo " başarısız.";
	}
	else
		echo" seans ekleme başarısız. Sistemde bu saate ait film seansı mevcut.";
		
		
}
else
{
	echo " boş bilgi bırakıldı, doldurup tekrar deneyin.";
	header("refresh:2;url=../admin/adminsayfasi.php?sayfa=salonekle");
}

			

?>
</body>
</html>