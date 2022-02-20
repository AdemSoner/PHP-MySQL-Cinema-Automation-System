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
$sql=mysqli_query($baglanti,"select * from filmler where filmid=".$filmid);
$resultbir=mysqli_fetch_assoc($sql);

echo "<form name='guncelle' method='post' action='filmguncelle2.php?id=".$filmid."' align=center>
	<table border=1 align=center   bgcolor=#24313C  bordercolor=#1AB188 >
	<tr><td colspan='2' align=center ><b><font color='#FFFFFF' size=7> Film Güncelleme </td> </tr>
	<tr> <td><b><font color='#FFFFFF'> Film ismi(".$resultbir['filmismi'].")</td>
	<td> <input type='text' name='filmismi' value='".$resultbir['filmismi']."' ></td>
	</tr>
	<tr> <td><b><font color='#FFFFFF'> SalonID(".$resultbir['salonid'].")</td>
	<td><select name='salonid' style='width:100px;'> <option>".$resultbir['salonid']."</option> ";
	$sql=mysqli_query($baglanti,"select * from salonlar ORDER BY salonismi ASC");
		while($result=mysqli_fetch_assoc($sql))
 		{ $flag=0;
			$result1=mysqli_fetch_assoc(mysqli_query($baglanti,"select * from filmler where salonid='".$result['salonismi']."'"));
			if($result1)
				$flag=1;
			if($flag==0)
				echo "<font color='#FFFFFF'><option>".$result['salonismi']."</option></font>";
		}
	
echo "</select></td>
	</tr>
	<tr> <td><b><font color='#FFFFFF'> Film türü(".$resultbir['turu'].")</td>
	<td> <select name='tur' >
 		 <option disabled='disabled'>Film türü seçiniz</option>
    	 <option>Aksiyon</option>
		 <option>Komedi</option> 
		 <option>Korku</option></select> </td>
	</tr>
	
	<tr> <td>       </td>
	<td> <a style='text-decoration:none;color:#00FFFF' href='../admin/adminsayfasi.php?sayfa=filmduzenle'>Geri dön</a> <input type='submit' name='gonder' value='Güncelle'></td>
	</tr>
	</table>
	</form>"; 
	
		



?>
</body>
</html>