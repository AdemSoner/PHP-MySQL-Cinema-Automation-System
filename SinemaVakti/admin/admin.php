<?php 
session_start();
session_destroy();
ini_set("display_errors",0);// Sayfadaki hataları göstermez.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/png" href="../img/sinem.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinema Vakti admin giriş sayfası </title>
<link href='../css/alinti.css' rel='stylesheet' type='text/css'>
<link href='../css/textbox.css' rel='stylesheet' type='text/css'>
  
</head>

<body align=center background="../img/bg.jpg">
<br><br><br>
<img src="../img/sinem.png" width="450"/>
<table align="center"  bgcolor="#24313C">
<tr align="right"> <td></td></tr>

<tr align="right"> <td>
<a style='text-decoration:none;color:white' href="../index.php"><font size="1">Kullanıcı girişi için tıklayın</font></a></td>
</tr>
<tr>
<td>
<br><br>


<strong ><font size="+3" color="#FFFFFF" face="Palatino Linotype, Book Antiqua, Palatino, serif">Admin panel girişi</font></strong>
<form name='admingiris' method='post' action='../admin/admingiris.php' align=center>
<br>

<input  type="text" name="kuladi" class="textboxeposta" placeholder="Kullanıcı adı"><br><br>

<input type='password' name="sifre"  class="textboxsifre"  placeholder='Şifre'><br>




	

<input type='submit' name='admingiris' value='Giriş' class="push_button red">


</form>
</td>
</tr>
</table>
</body>
</html>