<?php 
include '../baglanti.php';
include '../admin/adminkontrol.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti izleyici ekleme sayfası</title>
</head>
<body leftmargin="500" topmargin="150" background="../img/bgadmin.png">
<?php
$isim = $_POST["isim"];
$eposta = $_POST["eposta"];
$tel = $_POST["tel"];
$sifre = $_POST["sifre"];
$bakiye = $_POST["bakiye"];
$flag=0;
if($isim!="" && $eposta!=""&& $sifre!=""&& $tel!="")
{
	$sql=mysqli_query($baglanti,"SELECT * FROM izleyici WHERE eposta ='$eposta' OR tel='$tel'");
			while($result=mysqli_fetch_assoc($sql))
				if($result['eposta']==$eposta || $result['tel']==$tel)
					$flag=1;
			
			if($flag==0)
			{
	$kontrol = mysqli_query($baglanti,"INSERT INTO izleyici (isim,tel,eposta,sifre,bakiye) VALUES ('$isim','$tel','$eposta','$sifre','$bakiye')");
	if($kontrol)
	{ echo "İzleyici ekleme başarılı."; header("refresh:2;url=../admin/adminsayfasi.php?sayfa=izleyiciduzenle"); }
	else
		echo " başarısız.";
		}
			else
			{
				echo "<font color='#FFFFFF'><br><br><br><br> Bu eposta veya telefon zaten sistemde kayıtlı .<img src='../img/error.png' width='50' height='50'></font>"; 
					header("refresh:2;url=../admin/adminsayfasi.php?sayfa=izleyiciekle");
			}

		
		
}
else
{
	echo " boş bilgi bırakıldı, doldurup tekrar deneyin.";
	header("refresh:2;url=../admin/adminsayfasi.php?sayfa=salonekle");
}

			

?>
</body>
</html>