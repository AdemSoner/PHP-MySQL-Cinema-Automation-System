<?php 
include '../baglanti.php';
include '../admin/adminkontrol.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/png" href="../img/sinem.ico"/>
<script type="text/javascript" src="../admin/menu/js/stmenu.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin paneli</title>
</head>
<body leftmargin="500" topmargin="150" background="../img/bgadmin.png">


<?php

echo "<table border=0> <tr> <td><font color='#FFFFFF'>Giriş yapan admin<font color='#FFFFFF'> ". $_SESSION['kuladi']."</td><td align=right colspan='2'> <a style='text-decoration:none;color:yellow' href='../index.php'>Çıkış yap</a><br />
</td></tr><tr><td colspan='3'>";
?>
<script type="text/javascript">
<!--
stm_bm(["menu16a9",900,"","../admin/menu/js/blank.gif",0,"","",0,0,250,0,1500,1,0,0,"","",0,0,1,2,"default","hand","",1,25],this);
stm_bp("p0",[0,4,0,0,0,0,10,0,100,"",-2,"",-2,50,0,0,"#999999","transparent","../admin/menu/js/bg_01.gif",3,0,0,"#000000"]);
stm_ai("p0i0",[0,"Sinema vakti","","",-1,-1,0,"../admin/adminsayfasi.php","_self","","","","",10,1,0,"","",0,0,0,0,1,"#E6EFF9",1,"#999999",1,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#000000","bold 12pt Arial","bold 12pt Arial",0,0,"","","","",0,0,0],190,30);
stm_aix("p0i1","p0i0",[1,"Filmler","","",-1,-1,0,"","_self","","","","",0,0,0,"","",-1,-1,0,0,2,"#FF0000",1,"#FFD602",1,"","",3,3,0,0,"#E6EFF9","#000000","#999999","#000000","bold 8pt Verdana","bold 8pt Verdana"],100,30);
stm_bp("p1",[1,4,0,5,1,2,0,0,100,"",-2,"",-2,50,0,0,"#FF0000","transparent","",3,1,1,"#999999"]);
stm_aix("p1i0","p0i0",[0,"Vizyondakiler","","",-1,-1,0,"../admin/adminsayfasi.php?sayfa=vizyondakilerhepsi","_self","","","","",0,0,0,"","",-1,-1,0,0,2,"#FFFFFF",1,"#999999",1,"","",3,3,0,0,"#FF0000","#000000","#000000","#000000","8pt Verdana","8pt Verdana"]);
stm_bpx("p2","p1",[1,2]);
stm_aix("p2i0","p1i0",[0,"Aksiyon","","",-1,-1,0,"../admin/adminsayfasi.php?sayfa=vizyondakileraksiyon","_self","","","","",0,0,0,"","",0,0,0,0,2,"#999999"]);
stm_aix("p2i1","p2i0",[0,"Komedi","","",-1,-1,0,"../admin/adminsayfasi.php?sayfa=vizyondakilerkomedi"]);
stm_aix("p2i2","p2i0",[0,"Korku","","",-1,-1,0,"../admin/adminsayfasi.php?sayfa=vizyondakilerkorku"]);
stm_ep();
stm_aix("p1i1","p0i0",[0,"","","",-1,-1,0,"","","","","","",0,0,0,"","",0,0,0,0,2,"#99CC99",1,"#999999",1,"","",3,3,0,0,"#E6EFF9","#000000","#000000","#000000","8pt Verdana","8pt Verdana",0,1]);
stm_aix("p1i2","p1i1",[0,"Film ekle","","",-1,-1,0,"../admin/adminsayfasi.php?sayfa=filmekle"]);
stm_aix("p1i3","p1i1",[0,"Film sil/düzenle","","",-1,-1,0,"../admin/adminsayfasi.php?sayfa=filmduzenle"]);

stm_ep();
stm_aix("p0i2","p0i1",[0,"Salonlar","","",-1,-1,0,"","_self","","","","",0,0,0,"","",-1,-1,0,0,2,"#E6EFF9"],100,30);
stm_bpx("p3","p1",[]);
stm_aix("p3i0","p1i1",[0,"Salon ekle","","",-1,-1,0,"../admin/adminsayfasi.php?sayfa=salonekle"]);
stm_aix("p3i1","p1i1",[0,"Salon sil/düzenle","","",-1,-1,0,"../admin/adminsayfasi.php?sayfa=salonduzenle"]);
stm_ep();
stm_aix("p0i3","p0i2",[0,"İzleyiciler"],100,30);
stm_bpx("p4","p1",[]);
stm_aix("p4i0","p0i0",[0,"İzleyici ekle","","",-1,-1,0,"../admin/adminsayfasi.php?sayfa=izleyiciekle","_self","","","","",0,0,0,"","",0,0,0,0,2,"#999999",1,"#999999",1,"","",3,3,0,0,"#E6EFF9","#000000","#000000","#000000","8pt Verdana","8pt Verdana",0]);
stm_aix("p4i1","p1i1",[0,"İzleyici sil/düzenle","","",-1,-1,0,"../admin/adminsayfasi.php?sayfa=izleyiciduzenle"]);
stm_aix("p4i1","p1i1",[0,"Bilet sil","","",-1,-1,0,"../admin/adminsayfasi.php?sayfa=biletsil"]);
stm_ep();
stm_aix("p0i3","p0i2",[0,"Seanslar"],100,30);
stm_bpx("p4","p1",[]);
stm_aix("p4i0","p0i0",[0,"Seans ekle","","",-1,-1,0,"../admin/adminsayfasi.php?sayfa=seansekle","_self","","","","",0,0,0,"","",0,0,0,0,2,"#999999",1,"#999999",1,"","",3,3,0,0,"#E6EFF9","#000000","#000000","#000000","8pt Verdana","8pt Verdana",0]);
stm_aix("p4i1","p1i1",[0,"Seans sil/düzenle","","",-1,-1,0,"../admin/adminsayfasi.php?sayfa=seansduzenle"]);

stm_ep();
<?php
if($_SESSION["giristuru"]=="boss")
{?>
stm_aix("p0i4","p0i2",[0,"Boss panel"],110,30);
stm_bpx("p5","p1",[]);
stm_aix("p5i0","p1i1",[0,"Admin ekle","","",-1,-1,0,"../admin/adminsayfasi.php?sayfa=adminekle"]);
stm_aix("p5i1","p1i1",[0,"Admin sil/düzenle","","",-1,-1,0,"../admin/adminsayfasi.php?sayfa=adminduzenle"]);
stm_ep();
<?php } ?>
stm_ep();
stm_em();
//-->
</script>
<?php
echo "</td></tr><tr><td><br><br><br><br><br></td></tr>
		<tr>
		<td colspan='3'> 
		<table align='center' border=0 width=490 >";
$gelenveri =@$_GET["sayfa"];

switch($gelenveri)
{
	
	case "vizyondakilerhepsi":
		echo "
			<tr>
			<td><b><font color='#FFFFFF'>Film id</font></b></td> <td><b><font color='#FFFFFF'>Film ismi</font></b></td><td><b><font color='#FFFFFF'>Salon Numarası</font></b></td><td><b><font color='#FFFFFF'>Film türü</font></b></td></tr>";
		$sql=mysqli_query($baglanti,"select * from filmler ORDER BY salonid ASC");
		while($result=mysqli_fetch_assoc($sql))
 		{ 
   			echo "
      		<tr> <font color='#FF0000'> <td ><font color='#FFFFFF'>".$result['filmid']."</font></td>
			<td ><font color='#FFFFFF'>".$result['filmismi']."</font></td>
			<td ><font color='#FFFFFF'>".$result['salonid']."</font></td>
			<td ><font color='#FFFFFF'>".$result['turu']."</font></td>
			<td ><img src='../".$result['adres']."' width='60'></font></td>
			</font>
     </tr>";}
	 echo "</table></td></tr>";     break;  
	 
	 
						 //vizyondakiler aksiyon
	 
	 
	 
		
	case "vizyondakileraksiyon":                                                                                            
		echo "<tr>
		<td colspan='3'> 
		<table align='center' border=0 width=490>
			<tr>
			<td><b><font color='#FFFFFF'>Film id</font></b></td> <td><b><font color='#FFFFFF'>Film ismi</font></b></td><td><b><font color='#FFFFFF'>Salon Numarası</font></b></td><td><b><font color='#FFFFFF'>Film türü</font></b></td></tr>";
		$sql=mysqli_query($baglanti,"select * from filmler where turu='Aksiyon' ORDER BY salonid ASC");
		while($result=mysqli_fetch_assoc($sql))
 		{
   			echo "
      		<tr> <font color='#FF0000'> <td ><font color='#FFFFFF'>".$result['filmid']."</font></td>
			<td ><font color='#FFFFFF'>".$result['filmismi']."</font></td>
			<td ><font color='#FFFFFF'>".$result['salonid']."</font></td>
			<td ><font color='#FFFFFF'>".$result['turu']."</font></td>
			</font>
     </tr>";}
	 echo "</table></td></tr>";     break;
	 
	 
	 
						 // vizyondakiler komedi
	 
	 
	 
	 
	case "vizyondakilerkomedi":                                                                                             
		echo "<tr>
		<td colspan='3'> 
		<table align='center' border=0 width=490>
			<tr>
			<td><b><font color='#FFFFFF'>Film id</font></b></td> <td><b><font color='#FFFFFF'>Film ismi</font></b></td><td><b><font color='#FFFFFF'>Salon Numarası</font></b></td><td><b><font color='#FFFFFF'>Film türü</font></b></td></tr>";
		$sql=mysqli_query($baglanti,"select * from filmler where turu='Komedi' ORDER BY salonid ASC");
		while($result=mysqli_fetch_assoc($sql))
 		{ 
   			echo "
      		<tr> <font color='#FF0000'> <td ><font color='#FFFFFF'>".$result['filmid']."</font></td>
			<td ><font color='#FFFFFF'>".$result['filmismi']."</font></td>
			<td ><font color='#FFFFFF'>".$result['salonid']."</font></td>
			<td ><font color='#FFFFFF'>".$result['turu']."</font></td>
			</font>
     </tr>";}
	 echo "</table></td></tr>";     break;
	 
	 
	 
	 
						 //vizyondakiler korku
	 
	 
	 
	case "vizyondakilerkorku":
		echo "<tr>
		<td colspan='3'> 
		<table align='center' border=0 width=490>
			<tr>
			<td><b><font color='#FFFFFF'>Film id</font></b></td> <td><b><font color='#FFFFFF'>Film ismi</font></b></td><td><b><font color='#FFFFFF'>Salon Numarası</font></b></td><td><b><font color='#FFFFFF'>Film türü</font></b></td></tr>";
		$sql=mysqli_query($baglanti,"select * from filmler where turu='Korku' ORDER BY salonid ASC");
		while($result=mysqli_fetch_assoc($sql))
 		{
   			echo "
      		<tr> <font color='#FF0000'> <td ><font color='#FFFFFF'>".$result['filmid']."</font></td>
			<td ><font color='#FFFFFF'>".$result['filmismi']."</font></td>
			<td ><font color='#FFFFFF'>".$result['salonid']."</font></td>
			<td ><font color='#FFFFFF'>".$result['turu']."</font></td>
			</font>
     </tr>";}
	 echo "</table></td></tr>";     break;
	 
	 
	 
							 // film ekleme
	 
	case "filmekle": 
		echo "<tr>
		<td colspan='3'> 
		<table align='center' border=0 width=490>
		<tr><td align='right'> <form name='form1' method='post' action='../admin/filmekle.php' enctype='multipart/form-data'> Film ismi giriniz :</td>
		<td><input type=text name=filmismi> </td>
	<tr><td align='right'>Film salonu giriniz :</td><td><select name='salonismi' style='width:100px;'> ";
	$sql=mysqli_query($baglanti,"select * from salonlar ORDER BY salonismi ASC");
		while($result=mysqli_fetch_assoc($sql))
 		{ 
			$flag=0;
			$result1=mysqli_fetch_assoc(mysqli_query($baglanti,"select * from filmler where salonid='".$result['salonismi']."'"));
			if($result1)
				$flag=1;
			if($flag==0)
				echo "<font color='#FFFFFF'><option>".$result['salonismi']."</option></font>";
   			
		}
	
	echo "</select></td>
	<tr><td align=right> Film türü seçiniz:</td><td>
		<select name='tur' style='width:100px;' >
    	 <option>Aksiyon</option>
		 <option>Komedi</option> 
		 <option>Korku</option></select> </td></tr>
		 <tr><td align=right> Film kapağı seçiniz.</td><td> <input type='file' name='fileToUpload' id='fileToUpload'></td></tr>
	<tr><td align='center' colspan='2'>
	<input name=giris type=submit value=Ekle>
	</td></tr></form>"; break;
		
		
							//film silme düzenleme
		
		
	case "filmduzenle":
		echo "<tr>
		<td colspan='3'> 
		<table align='center' border=0 width=490 >
			<tr>
			<td><b><font color='#FFFFFF'>Film id</font></b></td> <td><b><font color='#FFFFFF'>Film ismi</font></b></td><td><b><font color='#FFFFFF'>Salon Numarası</font></b></td><td><b><font color='#FFFFFF'>Film türü</font></b></td></tr>";
		$sql=mysqli_query($baglanti,"select * from filmler ORDER BY salonid ASC");
		while($result=mysqli_fetch_assoc($sql))
 		{
   			echo "
      		<tr> <font color='#FF0000'> <td ><font color='#FFFFFF'>".$result['filmid']."</font></td>
			<td ><font color='#FFFFFF'>".$result['filmismi']."</font></td>
			<td ><font color='#FFFFFF'>".$result['salonid']."</font></td>
			<td ><font color='#FFFFFF'>".$result['turu']."</font></td>
			<td> <a href='../admin/filmsil.php?id=".$result['filmid']."'><img src='../img/logo.png' width='30' height='28'</a></td>
			<td> <a href='../admin/filmguncelle.php?id=".$result['filmid']."'><img src='../img/guncelle.png' width='30' height='28'</a></td>
			</font>
     </tr>";}
	 echo "</table></td></tr>";     break;
	 
						 // salon ekleme
	 
	case "salonekle":
		echo "<tr>
		<td colspan='3'> 
		<table align='center' border=0 width=490>
		<tr><td align='right'> <form name='form1' method='post' action='../admin/salonekle.php'> Salon no giriniz:</td>
		<td><input type=text name='salonismi' placeholder='0-100 arası' pattern='[0-9]{1-2}'> </td>
		<tr><td align='right'>Koltuk sayısı seçiniz:</td>
		<td><select name='koltuk'> 
      		<font color='#FFFFFF'><option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option></font>
		</select></td>
		<tr><td align='center' colspan='2'>
		<input name=giris type=submit value=Ekle>
		</td></tr></form>"; break;
	
	
						//salon silme/düzenleme
	
	
	case "salonduzenle":
		echo "<tr>
		<td colspan='3'> 
		<table align='center' border=0 width=490 >
			<tr>
			<td><b><font color='#FFFFFF'>Salon id</font></b></td> <td><b><font color='#FFFFFF'>Salon ismi</font></b></td><td><b><font color='#FFFFFF'>Koltuk sayısı</font></b></td><td><b><font color='#FFFFFF'>Sil</font></b></td><td><b><font color='#FFFFFF'>Düzenle</font></b></td></tr>";
		$sql=mysqli_query($baglanti,"select * from salonlar ORDER BY salonismi ASC");
		while($result=mysqli_fetch_assoc($sql))
 		{ 
   			echo "
      		<tr> <font color='#FF0000'> <td ><font color='#FFFFFF'>".$result['salonid']."</font></td>
			<td ><font color='#FFFFFF'>".$result['salonismi']."</font></td>
			<td ><font color='#FFFFFF'>".$result['koltuk']."</font></td>
			<td> <a href='../admin/salonsil.php?id=".$result['salonid']."'><img src='../img/logo.png' width='30' height='28'</a></td>
			<td> <a href='../admin/salonguncelle.php?id=".$result['salonid']."'><img src='../img/guncelle.png' width='30' height='28'</a></td>
			</font>
     </tr>";}
	 echo "</table></td></tr>";     break;

						// izleyici user ekleme
	case "izleyiciekle":
		echo "<tr>
		<td colspan='3'> 
		<table align='center' border=0 width=490>
		<tr><td align='right'> <form name='form1' method='post' action='../admin/izleyiciekle.php'> isim-soyisim giriniz:</td>
		<td><input type=text name='isim' placeholder='isim soyisim' > </td></tr>
		
		<tr><td align='right'>Telefon bilgisi giriniz</td>
		<td><input type=text name='tel' placeholder='ör.5454445544 şeklinde' pattern='[0-9]{10}' ></td></tr>
		<tr><td align='right'>Email giriniz</td>
		<td><input  type='email' name='eposta' placeholder='E-Mail Giriniz(@ zorunlu)'></td></tr>
		<tr><td align='right'>Şifre giriniz</td>
		<td><input type='text' name='sifre' placeholder='Şifre giriniz'></td></tr>
		<tr><td align='right'>Bakiye giriniz</td>
		<td><input type='text' name='bakiye' placeholder='Bakiye miktarı (0-99)'></td></tr>
		<tr><td align='center' colspan='2'>
		<input name=giris type=submit value=Ekle>
		</td></tr></form>"; break;
		
		
		
							// izleyici user düzenleme
	case "izleyiciduzenle":
		echo "<tr>
		<td colspan='4'> 
		<table align='center' border=0 width=490 >
			<tr>
			<td><b><font color='#FFFFFF'>User id</font></b></td> <td><b><font color='#FFFFFF'>isim-soyisim</font></b></td><td><b><font color='#FFFFFF'>Telefon</font></b></td><td><b><font 	color='#FFFFFF'>Email</font></b></td><td><b><font color='#FFFFFF'>Şifre</font></b></td><td><b><font color='#FFFFFF'>Bakiye</font></b></td></tr>";
		$sql=mysqli_query($baglanti,"select * from izleyici ORDER BY id ASC");
		while($result=mysqli_fetch_assoc($sql))
 		{ 
   			echo "
      		<tr> <font color='#FF0000'> <td ><font color='#FFFFFF'>".$result['id']."</font></td>
			<td ><font color='#FFFFFF'>".$result['isim']."</font></td>
			<td ><font color='#FFFFFF'>".$result['tel']."</font></td>
			<td ><font color='#FFFFFF'>".$result['eposta']."</font></td>
			<td ><font color='#FFFFFF'>".$result['sifre']."</font></td>
			<td ><font color='#FFFFFF'>".$result['bakiye']."</font></td>
			<td> <a href='../admin/izleyicisil.php?id=".$result['id']."'><img src='../img/logo.png' width='30' height='28'</a></td>
			<td> <a href='../admin/izleyiciguncelle.php?id=".$result['id']."'><img src='../img/guncelle.png' width='30' height='28'</a></td>
			</font>
     </tr>";}
	 echo "</table></td></tr>";     break;
		
						// seans ekleme 
		
		case "seansekle": 
		echo "<tr>
		<td colspan='3'> 
		<table align='center' border=0 width=490>
		<tr><td align='right'>Film seçiniz :</td><td><form name='form1' method='post' action='../admin/seansekle.php'>
		<select name='filmismi' style='width:177px'> ";
		$sql=mysqli_query($baglanti,"select * from filmler");
		while($result=mysqli_fetch_assoc($sql))
		{
				echo "<option><font color='#FFFFFF'>".$result['filmismi']."</font></option>";
		}

		echo "</select></td></tr>
		<tr><td align='right'>  Seans Saati giriniz :</td>
		<td><input type=text name='saat' placeholder='00:00 şeklinde giriniz'> </td>
		<tr><td align=right> Bilet fiyatı giriniz:</td>
		<td><input type=text name='fiyat' placeholder='Bilet fiyatı'> </td></tr>
		<tr><td align='center' colspan='2'>
		<input name=giris type=submit value=Ekle>
		</td></tr></form>"; break;
		
						// seans düzenleme
		case "seansduzenle":
		
		echo "<tr>
		<td colspan='4'> 
		<table align='center' border=0 width=490 >
			<tr>
			<td><b><font color='#FFFFFF'>Seans id</font></b></td> <td><b><font color='#FFFFFF'>Film ismi</font></b></td><td><b><font color='#FFFFFF'>Salon ismi</font></b></td><td><b><font 	color='#FFFFFF'>Saat</font></b></td><td><b><font color='#FFFFFF'>Fiyat</font></b></td></tr>";
		$sql=mysqli_query($baglanti,"select * from seans ORDER BY seansid ASC");
		while($result=mysqli_fetch_assoc($sql))
 		{ 
			
			$resultfilm=mysqli_fetch_assoc(mysqli_query($baglanti,"select * from filmler where filmid='".$result['filmid']."'"));
   			echo "
      		<tr> <font color='#FF0000'> <td ><font color='#FFFFFF'>".$result['seansid']."</font></td>
			<td ><font color='#FFFFFF'>".$resultfilm['filmismi']."</font></td>
			<td ><font color='#FFFFFF'>".$result['salonid']."</font></td>
			<td ><font color='#FFFFFF'>".$result['saat']."</font></td>
			<td ><font color='#FFFFFF'>".$result['fiyat']."</font></td>
			<td> <a href='../admin/seanssil.php?id=".$result['seansid']."'><img src='../img/logo.png' width='30' height='28'</a></td>
			<td> <a href='../admin/seansguncelle.php?id=".$result['seansid']."'><img src='../img/guncelle.png' width='30' height='28'</a></td>
			</font>
     </tr>";}
	 echo "</table></td></tr>";     break;
		
					// bilet düzenleme
		
		case "biletsil":
		
		echo "<tr>
		<td colspan='4'> 
		<table align='center' border=0 width=490 >
			<tr>
			<td><b><font color='#FFFFFF'>Bilet id</font></b></td><td><b><font color='#FFFFFF'>Bilet sahibi</font></b></td> <td><b><font color='#FFFFFF'>Film ismi</font></b></td><td><b><font color='#FFFFFF'>Salon ismi</font></b></td><td><b><font 	color='#FFFFFF'>Saat</font></b></td><td><b><font color='#FFFFFF'>Fiyat</font></b></td><td><b><font color='#FFFFFF'>Koltuk</font></b></td></tr>";
		$sql=mysqli_query($baglanti,"select * from izleyici INNER JOIN biletler ON izleyici.id=biletler.idizleyici ORDER BY biletler.id ASC");
		while($result=mysqli_fetch_assoc($sql))
 		{ 
			
			$resultfilm=mysqli_fetch_assoc(mysqli_query($baglanti,"select * from filmler where filmid='".$result['filmid']."'"));
   			echo "
      		<tr> <font color='#FF0000'> <td ><font color='#FFFFFF'>".$result['id']."</font></td>
			<td ><font color='#FFFFFF'>".$result['isim']."</font></td>
			<td ><font color='#FFFFFF'>".$resultfilm['filmismi']."</font></td>
			<td ><font color='#FFFFFF'>".$result['salonid']."</font></td>
			<td ><font color='#FFFFFF'>".$result['seans']."</font></td>
			<td align=center><font color='#FFFFFF'>".$result['fiyat']."</font></td>
			<td align=center><font color='#FFFFFF'>".$result['alinankoltuk']."</font></td>
			<td> <a href='../admin/biletsil.php?id=".$result['id']."'><img src='../img/logo.png' width='30' height='28'</a></td>
     </tr>";
	 }
	 $sql=mysqli_fetch_assoc(mysqli_query($baglanti,"SELECT MAX(fiyat) AS EnPahaliBilet FROM biletler"));
		
	 echo "<tr> <td ><font color='#FFFFFF'>".$sql['fiyat']."</font></td></tr></table></td></tr>";     break;
		
		
		// admin ekleme(boss)
		
	case "adminekle":
		echo "<tr>
		<td colspan='3'> 
		<table align='center' border=0 width=490>
		<tr><td align='right'> <form name='form1' method='post' action='../admin/boss/adminekle.php'> Kullanıcı adı giriniz:</td>
		<td><input type=text name='kuladi' placeholder='Kullanıcı adı' > </td>
		<tr><td align='right'>Şifre giriniz:</td>
		<td><input type=text name='sifre' placeholder='Şifre' > </td>
		<tr><td align='center' colspan='2'>
		<input name=giris type=submit value=Ekle>
		</td></tr></form>"; break;
		
		
		//admin silme düzenleme(boss)
		
	
	case "adminduzenle":
		echo "<tr>
		<td colspan='3'> 
		<table align='center' border=0 width=490 >
			<tr>
			<td><b><font color='#FFFFFF'>Admin id</font></b></td> <td><b><font color='#FFFFFF'>Kullanıcı adı</font></b></td><td><b><font color='#FFFFFF'>Şifre</font></b></td><td><b><font color='#FFFFFF'>Sil</font></b></td><td><b><font color='#FFFFFF'>Düzenle</font></b></td></tr>";
		$sql=mysqli_query($baglanti,"select * from admin");
		while($result=mysqli_fetch_assoc($sql))
 		{ //Tablo içerisine yazdırma
   			echo "
      		<tr> <font color='#FF0000'> <td ><font color='#FFFFFF'>".$result['id']."</font></td>
			<td ><font color='#FFFFFF'>".$result['kuladi']."</font></td>
			<td ><font color='#FFFFFF'>".$result['sifre']."</font></td>
			<td> <a href='../admin/boss/adminsil.php?id=".$result['id']."'><img src='../img/logo.png' width='30' height='28'</a></td>
			<td> <a href='../admin/boss/adminguncelle.php?id=".$result['id']."'><img src='../img/guncelle.png' width='30' height='28'</a></td>
			</font>
     </tr>";}
	 echo "</table></td></tr>";     break;
	default:
		echo "<tr><td></td></tr>"; break;
		
		
}


?>
</table>
</body>
</html>