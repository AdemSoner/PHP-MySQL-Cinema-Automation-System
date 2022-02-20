<?php 
include '../baglanti.php';
include '../admin/adminkontrol.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti film silme sayfası</title>
</head>
<body leftmargin="500" topmargin="150" background="../img/bgadmin.png">
<?php
$id =@$_GET["id"];


if($id!=""){
	$kontrol = mysqli_query($baglanti,"DELETE FROM izleyici where id='".$id."'");
	if($kontrol)
		{ echo " İzleyici silme başarılı."; header("refresh:2;url=../admin/adminsayfasi.php?sayfa=izleyiciduzenle"); }
	else
		echo " başarısız.";
	}
	else
		echo " Silmek istenilen filmid mevcut değil, tekrar deneyin.";




?>
</body>
</html>