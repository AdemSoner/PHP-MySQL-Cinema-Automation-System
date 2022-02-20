<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti giriş sayfası</title>
</head>
<body background="img/bg.jpg">
<?php
include "baglanti.php";
session_start();
ini_set("display_errors",0);// Sayfadaki hataları göstermez.
$eposta = $_POST ["eposta"];
$sifre = $_POST ["sifre"];
$sql=mysqli_fetch_assoc(mysqli_query($baglanti,"select * from izleyici where eposta='$eposta'")); $isim=$sql['isim'];

$sayfa= @$_GET["sayfa"];
switch($sayfa)
{
	case "giris":
		$_SESSION['epos']=$eposta;
		$_SESSION['isim']=$isim;
		$_SESSION['giristuru']="kullanici";
		if(empty($eposta)||empty($sifre))
		{
			echo  "<font color='#FFFFFF'><br><br><br><br>Lütfen şifrenizi giriniz<img src='img/error.png' width='50' height='50'>";
			header("refresh:3;url=index.php");
    		die("3 Saniye Sonra Giriş Sayfasına Yönlendiriceksiniz</font>");	
		}
		else
		{
			$sql = mysqli_query($baglanti,"SELECT * FROM izleyici WHERE eposta='$eposta' AND sifre='$sifre'");
				if($sql)
				{
					$kayitsayisi=mysqli_num_rows($sql);
					if($kayitsayisi>0)
					{
						$kayit=mysqli_fetch_array($sql);
						$isim=$kayit["isim"];
						$bakiye=$kayit["bakiye"];
						echo "<font color='#FFFFFF'><br><br><br><br>Giriş başarılı <img src='img/ekle.png' width='50' height='50'> <br><br><br><br>Sayın $isim Hoş geldiniz...<br><br><br><br> 				Sayfanıza yönlendiriliyorsunuz</font>";
						$_SESSION["isim"]=$isim;
						$_SESSION["bakiye"]=$bakiye;
						$_SESSION["giristuru"]="kullanici";
						header("refresh:2;url=kulsayfasi.php");
					}
					else 
					{ 
						echo "<font color='#FFFFFF'><br><br><br><br> Hatalı eposta veya şifre geri yönlendiriliyorsunuz<img src='img/error.png' width='50' height='50'></font>";  
						header("refresh:2;url=index.php");
					}
				}

			mysqli_close($baglanti);
		}
		break;
		
		




		
		
		
		case "kayit":
			$flag=0;
			$tel = $_POST ["tel"];
			$isim = $_POST ["isim"];
			$bakiye = $_POST ["bakiye"];
			$sql=mysqli_query($baglanti,"SELECT * FROM izleyici WHERE eposta ='$eposta'");
			while($result=mysqli_fetch_assoc($sql))
				if($result['eposta']==$eposta)
					$flag=1;
			if($flag==0)
			{
				if($sifre!="" && $isim!="")
				{
					$kontrol = mysqli_query($baglanti,"INSERT INTO izleyici (isim,eposta,sifre,tel,bakiye) VALUES ('$isim','$eposta','$sifre','$tel','$bakiye')");
					if($kontrol)
					{ echo "<font color='#FFFFFF'><br><br><br><br>Kayıt başarılı <img src='img/ekle.png' width='50' height='50'></font>"; header("refresh:2;url=index.php"); }
					else	echo " başarısız.";
				}
				else	
				{
					echo "<font color='#FFFFFF'><br><br><br><br> Boş bırakmayın<img src='img/error.png' width='50' height='50'></font>"; 
					header("refresh:1;url=uyeol.php"); 
				}
			}
			else
			{
				echo "<font color='#FFFFFF'><br><br><br><br> Bu eposta sistemde kayıtlı farklı bir eposta deneyin<img src='img/error.png' width='50' height='50'></font>"; 
					header("refresh:2;url=uyeol.php");
			}
			 
		
		
		break;
}
?>

</body>
</html>