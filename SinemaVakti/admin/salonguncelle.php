<?php 
include '../baglanti.php';
include '../admin/adminkontrol.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti Salon güncelleme sayfası</title>
</head>
<body leftmargin="500" topmargin="150" background="../img/bgadmin.png">
<?php

$salonid =@$_GET["id"];
$sql=mysqli_query($baglanti,"select * from salonlar where salonid=".$salonid);
$result=mysqli_fetch_assoc($sql);


preg_match('~(\d+)~', str_ireplace(array('.', ','), '', $result['salonismi']), $eslesme);

if($eslesme[0]<10)
	$eslesme[0]=$eslesme[0]%10;
	echo "<form name='guncelle' method='post' action='salonguncelle2.php?id=".$salonid."' align=center>
	<table border=1 align=center   bgcolor=#24313C  bordercolor=#1AB188 >
	<tr><td colspan='2' align=center ><b><font color='#FFFFFF' size=7> Salon Güncelleme </td> </tr>
	<tr> <td><b><font color='#FFFFFF'>(".$result['salonismi'].") Salon numarası</td>
	<td> <input type=text name='salonismi' value=".$eslesme[0]." placeholder='0-100 arası sayı giriniz' pattern='[0-9]{1-2}'> </td></td>
	</tr>
	<tr><td><b><font color='#FFFFFF'> (".$result['koltuk'].")Koltuk sayısı</td>
	<td><select name='koltuk'> 
      		<font color='#FFFFFF'><option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option></font>
		</select></td>
	</tr>	
	<tr> <td>       </td>
	<td> <a style='text-decoration:none;color:#00FFFF' href='../admin/adminsayfasi.php?sayfa=salonduzenle'>Geri dön</a> <input type='submit' name='gonder' value='Güncelle'></td>
	</tr>
	</table>
	</form>"; 
	
		
	


?>
</body>
</html>