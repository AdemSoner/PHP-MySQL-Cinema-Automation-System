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
$filmismi = $_POST["filmismi"];
$salonid = $_POST["salonismi"];
$filmturu = $_POST["tur"];
$flag=0;
$target_dir = "../img/filmler/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));;

// gerçek bir resim veya olmadığını kontrol ediyoruz
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// resim boyutu kontrolu
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Dosya boyutu çok yüksek lütfen 500mb a kadar resim seçiniz.";
  $uploadOk = 0;
}

// kullanılabilir resim formatları kontrolü
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sadece JPG, JPEG, PNG & GIF dosyaları yükleyebilirsiniz.";
  $uploadOk = 0;
}

// resim yükleme olumsuz olduğunda hata yazdırıcak.
if ($uploadOk == 0) {
  echo "resim yüklemede hata oluştu"; } else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { } else {
    echo "resim upload olurken bir sorun oluştu.";
  }
 }

$sql=mysqli_query($baglanti,"SELECT * FROM filmler WHERE filmismi='$filmismi'");
			while($result=mysqli_fetch_assoc($sql))
				if($result['filmismi']==$filmismi)
					$flag=1;
			
			if($flag==0)
			{
if($filmismi!="" && $salonid!="" &&$uploadOk==1){
	$target_file="img/filmler/".basename($_FILES["fileToUpload"]["name"]);
	
	$kontrol = mysqli_query($baglanti,"INSERT INTO filmler (filmismi,salonid,turu,adres) VALUES ('$filmismi','$salonid','$filmturu','$target_file')");
	if($kontrol)
		{ echo " Film ekleme başarılı."; header("refresh:3;url=../admin/adminsayfasi.php?sayfa=vizyondakilerhepsi"); }
	else
		echo " başarısız.";
	}
else { echo " Film ismi girip tekrar deneyin."; header("refresh:10;url=adminsayfasi.php?sayfa=filmekle"); }
			}
			else 
			{
				echo "<font color='#FFFFFF'><br><br><br><br> Bu film zaten sistemde kayıtlı .<img src='../img/error.png' width='50' height='50'></font>"; 
					header("refresh:2;url=../admin/adminsayfasi.php?sayfa=filmekle");
			}



?>
</body>
</html>