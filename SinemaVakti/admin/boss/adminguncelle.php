<?php 
include '../../baglanti.php';
include 'adminkontrol.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti film güncelleme sayfası</title>
</head>
<body leftmargin="500" topmargin="150" background="../../img/bgadmin.png">
<?php
$adminid =@$_GET["id"];
$sql=mysqli_query($baglanti,"select * from admin where id=".$adminid);
$result=mysqli_fetch_assoc($sql);


echo "<form name='guncelle' method='post' action='adminguncelle2.php?id=".$adminid."' align=center>
	<table border=1 align=center   bgcolor=#24313C  bordercolor=#1AB188 >
	<tr><td colspan='2' align=center ><b><font color='#FFFFFF' size=7> Admin Güncelleme </td> </tr>
	<tr> <td><b><font color='#FFFFFF'> Kullanıcı adı(".$result['kuladi'].")</td>
	<td> <input type='text' name='kuladi' value=".$result['kuladi']."></td>
	</tr>
	<tr> <td><b><font color='#FFFFFF'> Şifre(".$result['sifre'].")</td>
	<td><input type='text' name='sifre' value=".$result['sifre']."></td>
	</tr>
	<tr> <td>       </td>
	<td> <a style='text-decoration:none;color:#00FFFF' href='../adminsayfasi.php?sayfa=adminduzenle'>Geri dön</a> <input type='submit' name='gonder' value='Güncelle'></td>
	</tr>
	</table>
	</form>"; 
	



?>
</body>
</html>