<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/png" href="../img/sinem.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti admin giriş sayfası</title>
</head>
<body background="../img/bg.jpg">
<?php
include "../baglanti.php";
session_start();
$kuladi = $_POST ["kuladi"];
$sifre = $_POST ["sifre"];
if(empty($kuladi)||empty($sifre))
{
	echo  "<font color='#FFFFFF'><br><br><br><br>boş bırakmayın<img src='../img/error.png' width='50' height='50'>";
	header("refresh:2;url=../admin/admin.php");
    die("geri yönleniyorsunuz.</font>");	
}
else
{
	$_SESSION['kuladi']=$kuladi;
	$sql = mysqli_query($baglanti,"SELECT * FROM admin WHERE kuladi='$kuladi' AND sifre='$sifre'");
	if($sql)
	{
	$kayitsayisi=mysqli_num_rows($sql);
	if($kayitsayisi>0)
	{
		$kayit=mysqli_fetch_array($sql);
	
		echo "<font color='#FFFFFF'><br><br><br><br>Giriş başarılı <img src='../img/ekle.png' width='50' height='50'> <br><br><br><br>Sayın $kuladi Hoş geldiniz...<br><br><br><br> Sayfanıza 					yönlendiriliyorsunuz</font>";
	//	$_SESSION["isim"]=$isim;
		if($kuladi=="a" && $sifre=="1") $_SESSION["giristuru"]="boss";
		else $_SESSION["giristuru"]="admin";
		header("refresh:0;url=../admin/adminsayfasi.php");
	}
	else 
	{	 
		echo "<font color='#FFFFFF'><br><br><br><br> Hatalı kullanıcı adı veya şifre geri yönlendiriliyorsunuz<img src='../img/error.png' width='50' height='50'></font>";  
		header("refresh:2;url=../admin/admin.php");
	}
}

mysqli_close($baglanti);

}
?>

</body>
</html>