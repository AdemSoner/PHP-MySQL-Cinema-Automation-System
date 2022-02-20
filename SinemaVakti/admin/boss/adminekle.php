<?php 
include '../../baglanti.php';
include '../boss/adminkontrol.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti film ekleme sayfası</title>
</head>
<body leftmargin="500" topmargin="150" background="../../img/bgadmin.png">
<?php
$kuladi = $_POST["kuladi"];
$sifre = $_POST["sifre"];
$flag=0;
$sql=mysqli_query($baglanti,"SELECT * FROM admin WHERE kuladi ='$kuladi'");
			while($result=mysqli_fetch_assoc($sql))
				if($result['kuladi']==$kuladi)
					$flag=1;
			
			if($flag==0)
			{


if($kuladi!="" && $sifre!=""){
	$kontrol = mysqli_query($baglanti,"INSERT INTO admin (kuladi,sifre) VALUES ('$kuladi','$sifre')");
	if($kontrol)
		{ echo "Admin ekleme başarılı."; header("refresh:2;url=../../admin/adminsayfasi.php?sayfa=adminduzenle"); }
	else
		echo " başarısız.";
}
else { echo " boş bilgi bırakıldı, doldurup tekrar deneyin."; header("refresh:2;url=../adminsayfasi.php?sayfa=adminekle");}

			}
			else
			{
				echo "<font color='#FFFFFF'><br><br><br><br> Bu admin zaten sistemde kayıtlı .<img src='../../img/error.png' width='50' height='50'></font>"; 
					header("refresh:2;url=../adminsayfasi.php?sayfa=adminekle");
			}



?>
</body>
</html>