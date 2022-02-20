<?php 
include '../baglanti.php';
include '../admin/adminkontrol.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti izleyici güncelleme sayfası</title>
</head>
<body leftmargin="500" topmargin="150" background="../img/bgadmin.png">
<?php

$seansid =@$_GET["id"];
$sql=mysqli_query($baglanti,"select * from seans where seansid=".$seansid);
$result=mysqli_fetch_assoc($sql);
$filmid=$result['filmid'];
$resultfilm=mysqli_fetch_assoc(mysqli_query($baglanti,"select * from filmler where filmid='$filmid'"));
echo "<form name='guncelle' method='post' action='seansguncelle2.php?id=".$seansid."' align=center>
	<table border=1 align=center   bgcolor=#24313C  bordercolor=#1AB188 >
	<tr><td colspan='2' align=center ><b><font color='#FFFFFF' size=7> Seans Güncelleme </td> </tr>
	<tr> <td colspan=2 align=center><b><font color='#FFFFFF'>Film ismi: ".$resultfilm['filmismi']."</td>
	</tr>
	<tr><td><b><font color='#FFFFFF'> Seans Saati(".$result['saat'].")</td>
	<td> <input type=text name='saat' value='".$result['saat']."' placeholder='(00:00)şeklinde olmalı'> </td>
	</tr>	
	<tr> <td><b><font color='#FFFFFF'> Bilet fiyatı(".$result['fiyat'].")</td>
	<td> <input  type='text' name='fiyat' value='".$result['fiyat']."'> </td>
	</tr>
	
	<tr> <td>       </td>
	<td> <a style='text-decoration:none;color:#00FFFF' href='../admin/adminsayfasi.php?sayfa=izleyiciduzenle'>Geri dön</a> <input type='submit' name='gonder' value='Güncelle'></td>
	</tr>
	</table>
	</form>"; 
	
		
	





?>
</body>
</html>