<?php 
include 'baglanti.php';
include 'kullanicikontrol.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/png" href="img/sinem.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti bilet alma sayfası</title>
</head>
<body background="img/bg.jpg" align="center">
<?php
$filmid=@$_GET['id'];
$fiyat=@$_GET['biletfiyati'];
$saat=@$_GET['seans'];
$koltukno=$_POST["koltukno"];
$eposta=$_SESSION["epos"];
$tuketim=$_SESSION["bakiye"];

$result1=mysqli_fetch_assoc(mysqli_query($baglanti,"select * from izleyici where eposta='$eposta'"));
$izleyiciid=$result1["id"];
$result=mysqli_fetch_assoc(mysqli_query($baglanti,"select * from filmler where filmid='$filmid'"));
$salonismi=$result["salonid"];
echo "<table align='center' border='0'>
 <tr> 
   <td  align='left' width='300'><a style='text-decoration:none;color:white' href='kulsayfasi.php'><img src='img/sinem.png' width='200'/></a>  </td>
   <td width='100'><a style='text-decoration:none' href='kulsayfasi.php?sayfa=aksiyon'><b><font color='#FFFFFF'>Aksiyon</font></b></a></td>
   <td width='100'><a style='text-decoration:none' href='kulsayfasi.php?sayfa=komedi'><b><font color='#FFFFFF'>Komedi</font></b></a></td>
   <td width='100'><a href='kulsayfasi.php?sayfa=korku' style='text-decoration:none' ><b><font color='#FFFFFF'>Korku</font></b></a></td>
 </tr>
 <tr>
 <td colspan='3'>
  <a style='text-decoration:none;color:white' href='kulsayfasi.php?sayfa=biletal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='img/biletal.png' width='150'/></a> 
 </td>
 <td><font color='#FFFFFF'><b>".$_SESSION['isim']."</font></b><br>
<a style='text-decoration:none;color:white' href='index.php'>Çıkış yap</a><br />

 </td>
 </tr>

<br>
<tr><td colspan='4'><a style='text-decoration:none' href='kulsayfasi.php?sayfa=biletal'><b><font color='#FFFFFF'>Bilet seçimine geri dön</font></b></a></td></tr><tr>
		<td colspan='3'> ";
		if($fiyat>$tuketim)
		{
			echo "<b><font color='#FF0000'><u>Bakiyeniz Yetersiz, Lütfen bakiye yükleyin veya farklı bir film seçin.</b></font></u><img src='img/error.png' width='50' height='50'>";
			header("refresh:2;url=kulsayfasi.php?sayfa=biletal");
		}
		else
		{
		$kontrol = mysqli_query($baglanti,"INSERT INTO biletler (filmid,idizleyici,salonid,alinankoltuk,seans,fiyat) VALUES ('$filmid','$izleyiciid','$salonismi','$koltukno','$saat','$fiyat')");
		if($kontrol)
		{ 
			$_SESSION["bakiye"]=$_SESSION["bakiye"]-$fiyat;
			mysqli_query($baglanti,"update izleyici SET bakiye='".$_SESSION["bakiye"]."' WHERE eposta='$eposta'");
			$resultx=mysqli_fetch_assoc(mysqli_query($baglanti,"select * from biletler where idizleyici='$izleyiciid'"));
			echo "bilet alma başarılı."; 
			
			header("refresh:2;url=kulsayfasi.php"); 
		}
	else
		echo " başarısız.";
		
		}
	

?>
</body>
</html>