<?php 
include '../baglanti.php';
include '../admin/adminkontrol.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti film güncelleme sayfası</title>
</head>
<body leftmargin="500" topmargin="150" background="../img/bgadmin.png">
<?php
$filmid =@$_GET["id"];
$filmismi= $_POST["filmismi"];
$salonid= $_POST["salonid"];
$tur= $_POST["tur"];

	if($filmid!=""){

	$kontrol = mysqli_query($baglanti,"UPDATE filmler SET filmismi='$filmismi',salonid='$salonid',turu='$tur' WHERE filmid='$filmid'");
	if($kontrol)
		{ echo " Film güncelleme başarılı."; header("refresh:2;url=../admin/adminsayfasi.php?sayfa=vizyondakilerhepsi"); 
		}
	else
		echo " başarısız...";
	}
	else
		echo " Güncellemek istenilen filmid mevcut değil, tekrar deneyin.";





?>
</body>
</html>

