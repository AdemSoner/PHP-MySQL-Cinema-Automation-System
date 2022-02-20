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
$yukleme=@$_GET["yukleme"];
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
 </td><td align=center><font color='#FFFFFF'> Bakiyeniz=".$_SESSION['bakiye']." TL
 <td><font color='#FFFFFF'><b>".$_SESSION['isim']."</font></b><br>
<a style='text-decoration:none;color:white' href='index.php'>Çıkış yap</a><br />

 </td>
 </tr>

<br>
";
switch($yukleme)                                                                    //bilet alma
{
	case "yes":
	$miktar=$_POST["ekle"];
	if($miktar>0)
	{
	$bakiye=$miktar+$_SESSION['bakiye'];
	$kontrol = mysqli_query($baglanti,"update izleyici SET bakiye='$bakiye' WHERE eposta='$eposta'");
	if($kontrol)
	{
		$_SESSION['bakiye']=$bakiye;
		header("refresh:0;url=kulsayfasi.php");
	}
	else
		echo "<tr><td colspan=4><font color='#FFFFFF'> hata oldu abi.</font></td></tr>";
	}
	else
	{
		echo "<tr><td colspan=4><font color='#FFFFFF'>Lütfen 0 dan büyük bir sayı giriniz.</font></td></tr>";
		header("refresh:2;url=bakiyeyukle.php");
	}
	break;
	
	
	default:
	
	echo "<tr>
		<td colspan='3'>
		<table align='center' border=0 width=490 >
			<tr>
			<td><b><font color='#FFFFFF'>Yüklemek istediğiniz miktarı giriniz</font></b></td></tr>
			<tr><td><form name='bakiye' method='POST' action=bakiyeyukle.php?yukleme=yes><input type='text' name='ekle'></td></tr>
			<tr><td><input type='submit' name='eklee' value='Bakiye Yükle'></form></td></tr>
		
		 ";
		 break;
}
?>
</body>
</html>