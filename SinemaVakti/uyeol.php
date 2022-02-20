<?php 
session_start();
session_destroy();
ini_set("display_errors",0);// Sayfadaki hataları göstermez.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/png" href="img/sinem.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti Giriş Sayfası </title>
<link href='css/alinti.css' rel='stylesheet' type='text/css'>
<link href='css/textbox.css' rel='stylesheet' type='text/css'>
  
</head>
<body align=center background="img/bg.jpg">
<br><br><br>
<img src="img/sinem.png" width="450"/>
<table align="center"  bgcolor="#24313C">
<tr align="right"> <td></td></tr>

<tr>
<td>
<br><br>

<strong ><font size="+3" color="#FFFFFF" face="Palatino Linotype, Book Antiqua, Palatino, serif">Sinema Vakti <br> kayıt paneli</font></strong>
<form name='uye' method='post' action='kulgiris.php?sayfa=kayit' align=center>
</tr>
<tr>
<td>
<input  type="text" name="isim" class="textboxeposta" placeholder="Lütfen İsim-soyisim Giriniz"><br><br>

</td>
</tr>
<tr>
<td>
<input  type="text" name="tel" class="textboxeposta" placeholder="Lütfen başında 0 olmayacak şekilde 10 haneli giriniz." pattern="[0-9]{10}"><br><br>
</td>
</tr>
<tr>
<td>
<input  type="text" name="bakiye" class="textboxeposta" placeholder="Para para para (0-99)" pattern="[0-9]{2}"><br><br>
</td>
</tr>
<tr>
<td>
<input  type="email" name="eposta" class="textboxeposta" placeholder="Lütfen E-Mail Giriniz"><br><br>
</td>
</tr>
<tr>
<td>
<input type='password' name="sifre"  class="textboxeposta"  placeholder='Lütfen Şifreyi Giriniz'>
</td>
</tr>
<tr>
<td>

<input type='submit' name='giris' value='Üye ol' class="push_button red">
</form>
</td>
</tr>
<tr>
<td>
<form name='giris' method='post' action='index.php' align=center>
<input type='submit' name='giris' value='Giriş yapmaya dön' class="ustbuton5 red">
</form>
<br />
</td>
</tr>

</table>
</body>
</html>