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
$seans=@$_GET['seans'];
$fiyat=@$_GET["biletfiyati"];

echo "<table align='center' border='0'>
 <tr> 
   <td  align='left' width='300'><a style='text-decoration:none;color:white' href='kulsayfasi.php'><img src='img/sinem.png' width='200'/></a>  </td>
   <td width='100'><a style='text-decoration:none' href='kulsayfasi.php?sayfa=aksiyon'><b><font color='#FFFFFF'>Aksiyon</font></b></a></td>
   <td width='100'><a style='text-decoration:none' href='kulsayfasi.php?sayfa=komedi'><b><font color='#FFFFFF'>Komedi</font></b></a></td>
   <td width='100'><a href='kulsayfasi.php?sayfa=korku' style='text-decoration:none' ><b><font color='#FFFFFF'>Korku</font></b></a></td>
 </tr>
 <tr>
 <td colspan='2'>
  <a style='text-decoration:none;color:white' href='kulsayfasi.php?sayfa=biletal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='img/biletal.png' width='150'/></a> <a style='text-decoration:none;color:white' href='kulsayfasi.php?sayfa=biletlerim'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='img/biletlerim.png' width='150'/></a> 
 </td><td width='120'><font color='#FFFFFF'> Bakiyeniz=".$_SESSION['bakiye']." TL<br><a style='text-decoration:none;color:white' href='bakiyeyukle.php'>TL Yükle</a></font></td>
 <td><font color='#FFFFFF'><b>".$_SESSION['isim']."</font></b><br>
<a style='text-decoration:none;color:white' href='index.php'>Çıkış yap</a><br />

 </td>
 </tr>

<br>
<tr><td colspan='4'><a style='text-decoration:none' href='kulsayfasi.php?sayfa=biletal'><b><font color='#FFFFFF'>Bilet seçimine geri dön</font></b></a></td></tr><tr>
		<td colspan='3'> 
		<table align='center' border=0 width=490 >
			<tr> ";
			$result=mysqli_fetch_assoc(mysqli_query($baglanti,"select * from filmler where filmid='$filmid'"));
			$salonismi=$result["salonid"];
			
		echo	"<td align='center' colspan='3'>  <img src='".$result['adres']."' width='250'><br><font color='#FFFFFF'>".$result['filmismi']."</font><br></td>
		<td align='center'><font color='#FFFFFF'>Seans saati:<u>$seans </u><br> Bilet fiyatı:<u>$fiyat</u><br><br></font> <form name='form1' method='post' action='biletalimi.php?id=".$filmid."&seans=$seans&biletfiyati=$fiyat'><font color='#FFFFFF'>Alınacak koltuğu seçiniz.</font><br>
		<select name='koltukno'>";
		$sayac=0; // tüm koltukların dolu olup olmadığını kontrol edecek değişken
		$result1=mysqli_fetch_assoc(mysqli_query($baglanti,"select * from salonlar where salonismi='$salonismi'"));
		$koltuksayi=$result1["koltuk"];
		for($a=1;$a<=$koltuksayi;$a++)
		{	$flag=0;
		
			$sql=mysqli_query($baglanti,"select * from biletler where filmid='$filmid' AND alinankoltuk=$a AND seans='$seans'");
			while($result=mysqli_fetch_assoc($sql))  
 			{
				if($result)
				{
					$sayac++;
					$flag=1;
				}
			}
			if($flag==0)
				echo  "<option>$a</option>";
		}
		
		if($sayac==$koltuksayi)
			echo "<option>Tüm koltuklar dolu</option></select><br><input type='submit' name='gonder' value='Bilet al' disabled></td></tr>";
		else
			echo "</select><br><input type='submit' name='gonder' value='Bilet al'></td></tr>";

?>
</body>
</html>