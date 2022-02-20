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

$id =@$_GET["id"];
$sql=mysqli_query($baglanti,"select * from izleyici where id=".$id);
$result=mysqli_fetch_assoc($sql);

echo "<form name='guncelle' method='post' action='izleyiciguncelle2.php?id=".$id."' align=center>
	<table border=1 align=center   bgcolor=#24313C  bordercolor=#1AB188 >
	<tr><td colspan='2' align=center ><b><font color='#FFFFFF' size=7> İzleyici Güncelleme </td> </tr>
	<tr> <td><b><font color='#FFFFFF'> İzleyici ismi(".$result['isim'].")</td>
	<td> <input type=text name='isim' value='".$result['isim']."' > </td></td>
	</tr>
	<tr><td><b><font color='#FFFFFF'> Telefon(".$result['tel'].")</td>
	<td> <input type=text name='tel' value='".$result['tel']."' pattern='[0-9]{10}'> </td>
	</tr>	
	<tr> <td><b><font color='#FFFFFF'> Email(".$result['eposta'].")</td>
	<td> <input  type='email' name='eposta' value='".$result['eposta']."'> </td>
	</tr>
	<tr><td><b><font color='#FFFFFF'>Şifre giriniz(".$result['sifre'].")</b></td>
		<td><input type='text' name='sifre' value='".$result['sifre']."'></td>
	</tr>
	<tr><td><b><font color='#FFFFFF'>Bakiye giriniz(".$result['bakiye'].")</b></td>
		<td><input type='text' name='bakiye' value='".$result['bakiye']."'></td>
	</tr>
	<tr> <td>       </td>
	<td> <a style='text-decoration:none;color:#00FFFF' href='../admin/adminsayfasi.php?sayfa=izleyiciduzenle'>Geri dön</a> <input type='submit' name='gonder' value='Güncelle'></td>
	</tr>
	</table>
	</form>"; 
	
		
	





?>
</body>
</html>