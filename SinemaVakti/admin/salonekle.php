<?php 
include '../baglanti.php';
include '../admin/adminkontrol.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti film ekleme sayfası</title>
</head>
<body leftmargin="500" topmargin="150" background="../img/bgadmin.png">
<?php
$salonismi = $_POST["salonismi"];
$koltuk = $_POST["koltuk"];	
$flag=0;
if($salonismi!="" && $salonismi>'0')
{
	if($salonismi<10)
		$salonismi='SALON0'.$salonismi;
	else
		$salonismi='SALON'.$salonismi;
	$sql=mysqli_query($baglanti,"SELECT * FROM salonlar WHERE salonismi ='$salonismi'");
			while($result=mysqli_fetch_assoc($sql))
				if($result['salonismi']==$salonismi)
					$flag=1;
			
			if($flag==0)
			{
	$kontrol = mysqli_query($baglanti,"INSERT INTO salonlar (salonismi,koltuk) VALUES ('$salonismi','$koltuk')");
	if($kontrol)
	{ echo "Salon ekleme başarılı."; header("refresh:2;url=../admin/adminsayfasi.php?sayfa=salonduzenle"); }
	else
		echo " başarısız.";
		}
			else
			{
				echo "<font color='#FFFFFF'><br><br><br><br> Bu salon zaten sistemde kayıtlı .<img src='../img/error.png' width='50' height='50'></font>"; 
					header("refresh:2;url=../admin/adminsayfasi.php?sayfa=salonekle");
			}

		
		
}
else
{
	echo " boş bilgi bırakıldı, doldurup tekrar deneyin.";
	header("refresh:2;url=../admin/adminsayfasi.php?sayfa=salonekle");
}

			

?>
</body>
</html>