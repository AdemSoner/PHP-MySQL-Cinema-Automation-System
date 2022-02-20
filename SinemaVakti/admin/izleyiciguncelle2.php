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

$id =@$_GET["id"];
$isim= $_POST["isim"];
$tel= $_POST["tel"];
$eposta=$_POST["eposta"];
$sifre=$_POST["sifre"];
$bakiye=$_POST["bakiye"];

	if($id!=""){
	$kontrol = mysqli_query($baglanti,"UPDATE izleyici SET isim='$isim',tel='$tel',eposta='$eposta',sifre='$sifre',bakiye='$bakiye' WHERE id='$id'");
	if($kontrol)
		{ echo " İzleyici güncelleme başarılı."; header("refresh:2;url=../admin/adminsayfasi.php?sayfa=izleyiciduzenle"); 
		}
	else
		echo " başarısız.";
	}
	else
		echo " Güncellemek istenilen izleyici id mevcut değil, tekrar deneyin.";



?>
</body>
</html>

