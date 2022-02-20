<?php 
include 'baglanti.php';
include 'kullanicikontrol.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti</title>
</head>
<body background="img/bg.jpg" align="center">
<?php
$sayfa=@$_GET["sayfa"];
$eposta=$_SESSION["epos"];
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

<br>";
$flag=0;
switch($sayfa)                                                                    //bilet alma
{
	case "biletal":
	echo "<tr>
		<td colspan='4'> 
		<table align='center' border=0 width=490 >
			<tr>
			<td><b><font color='#FFFFFF'>Film ismi</font></b></td> <td><b><font color='#FFFFFF'>Salon Numarası</font></b></td><td><b><font color='#FFFFFF'>Film türü</font></b></td><td><b><font color='#FFFFFF'>Bilet fiyatı</font></b></td><td><b><font color='#FFFFFF'>Seans saati</font></b></td><td><b><font color='#FFFFFF'>Bilet al</font></b></td></tr>";
		$sql=mysqli_query($baglanti,"select * from filmler INNER JOIN seans ON seans.filmid = filmler.filmid ORDER BY saat ASC");
		while($result=mysqli_fetch_assoc($sql))  
 		{ //Tablo içerisine yazdırma
			
   			echo "
      		<tr> 
			<td ><font color='#FFFFFF'>".$result['filmismi']."</font></td>
			<td ><font color='#FFFFFF'>".$result['salonid']."</font></td>
			<td ><font color='#FFFFFF'>".$result['turu']."</font></td>
			<td ><font color='#FFFFFF'>".$result['fiyat']."TL</font></td>
			<td ><font color='#FFFFFF'>".$result['saat']."</font></td>
			<td><a style='text-decoration:none;color:white' href='biletal.php?id=".$result['filmid']."&seans=".$result['saat']."&biletfiyati=".$result['fiyat']."'><img src='img/ekle.png' width='20'/></a> </td>
			
			</font>
     </tr><tr></tr>";}
	 echo "</table></td></tr>";     break;
 
	 										// kullanıcıya ait biletler burada.
	 case "biletlerim":
	 echo "<tr>
		<td colspan='3'> 
		<table align='center' border=0 width=490 >
			<tr>
			<td><b><font color='#FFFFFF'>Film ismi</font></b></td><td><b><font color='#FFFFFF'>Salon no</font></b></td> <td><b><font color='#FFFFFF'>İzleyici id</font></b></td><td><b><font color='#FFFFFF'>İzleyici İsmi</font></b></td><td><b><font color='#FFFFFF'>Koltuk no</font></b></td><td><b><font color='#FFFFFF'>Seans</font></b></td></tr>";
		$resultx=mysqli_fetch_assoc(mysqli_query($baglanti,"select * from izleyici where eposta='$eposta'"));
		$izleyiciid=$resultx["id"];
		$izleyiciismi=$resultx["isim"];
		$query = mysqli_query($baglanti,"select * from biletler INNER JOIN filmler ON filmler.filmid = biletler.filmid WHERE idizleyici='$izleyiciid'"); 
		while($result=mysqli_fetch_assoc($query))
 		{ //Tablo içerisine yazdırma
   			echo "<td ><font color='#FFFFFF'>".$result['filmismi']."</font></td>
			<td ><font color='#FFFFFF'>".$result['salonid']."</font></td>
			<td ><font color='#FFFFFF'>".$result['idizleyici']."</font></td>
			<td ><font color='#FFFFFF'>$izleyiciismi</font></td>
			<td ><font color='#FFFFFF'>".$result['alinankoltuk']."</font></td>
			<td ><font color='#FFFFFF'>".$result['seans']."</font></td>
			<td> <a href='biletsil.php?id=".$result['id']."'><img src='img/sil.png' width='30' height='28'</a></td>
			</font>
     </tr>";}
	 echo "</table></td></tr>";     break;
	 
	case "aksiyon": 
	$flag=0;                                                         //aksiyon filmleri sıralama
	$sql=mysqli_query($baglanti,"select * from filmler where turu='aksiyon'");
	while($result=mysqli_fetch_assoc($sql))
	 { //Tablo içerisine yazdırma
	 	if($flag==0)
		 {
 	  		echo "
   	 			 <tr> <font color='#FF0000'>
				<td align='center' colspan='2'>  <img src='".$result['adres']."' width='250'><br><font color='#FFFFFF'>".$result['filmismi']."(".$result['salonid'].")</font><br><br></td> "; 
				$flag=1; 
		}
		else
		{
			echo "
   	 			 <font color='#FF0000'>
				<td align='center' colspan='2'>  <img src='".$result['adres']."' width='250'><br><font color='#FFFFFF'>".$result['filmismi']."(".$result['salonid'].")</font><br><br></td></tr> ";  
			$flag=0;
		}
	 }break;
	 
	 
	 
	 case "korku":  
	 $flag=0;                                                         // korku filmleri sıralama
	$sql=mysqli_query($baglanti,"select * from filmler where turu='korku'");
	while($result=mysqli_fetch_assoc($sql))
	 { //Tablo içerisine yazdırma
	 	if($flag==0)
		 {
 	  		echo "
   	 			 <tr> <font color='#FF0000'>
				<td align='center' colspan='2'>  <img src='".$result['adres']."' width='250'><br><font color='#FFFFFF'>".$result['filmismi']."(".$result['salonid'].")</font><br><br></td> "; 
				$flag=1; 
		}
		else
		{
			echo "
   	 			 <font color='#FF0000'>
				<td align='center' colspan='2'>  <img src='".$result['adres']."' width='250'><br><font color='#FFFFFF'>".$result['filmismi']."(".$result['salonid'].")</font><br><br></td></tr> ";  
			$flag=0;
		}
	 }break;
	case "komedi":   
	$flag=0;                                                            // komedi filmleri sıralama
	$sql=mysqli_query($baglanti,"select * from filmler where turu='komedi'");
	while($result=mysqli_fetch_assoc($sql))
	 { //Tablo içerisine yazdırma
	 	if($flag==0)
		 {
 	  		echo "
   	 			 <tr> <font color='#FF0000'>
				<td align='center' colspan='2'>  <img src='".$result['adres']."' width='250'><br><font color='#FFFFFF'>".$result['filmismi']."(".$result['salonid'].")</font><br><br></td> "; 
				$flag=1; 
		}
		else
		{
			echo "
   	 			 <font color='#FF0000'>
				<td align='center' colspan='2'>  <img src='".$result['adres']."' width='250'><br><font color='#FFFFFF'>".$result['filmismi']."(".$result['salonid'].")</font><br><br></td></tr> ";  
			$flag=0;
		}
	 }break;
	
	default:
	
		$sql=mysqli_query($baglanti,"select * from filmler ORDER BY salonid DESC");
		while($result=mysqli_fetch_assoc($sql))
	 	{ //Tablo içerisine yazdırma
	 		if($flag==0)
		 	{
 	  			echo "
   	 			 <tr> <font color='#FF0000'>
				<td align='center' colspan='2'>  <img src='".$result['adres']."' width='250'><br><font color='#FFFFFF'>".$result['filmismi']."(".$result['salonid'].")</font><br><br></td> "; 
				$flag=1; 
			}
			else
			{
				echo "
   	 			 <font color='#FF0000'>
				<td align='center' colspan='2'>  <img src='".$result['adres']."' width='250'><br><font color='#FFFFFF'>".$result['filmismi']."(".$result['salonid'].")</font><br><br></td></tr> ";  
				$flag=0;			
			}
	 	}
		$flag=0;
	 break;

}

?>
</table>
</body>
</html>