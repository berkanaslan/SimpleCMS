<head> <link href="stil/stil.css" rel="stylesheet" type="text/css"> </head>

<?php include("panel.php"); include("baglanti.php"); error_reporting(0);

if($_SESSION["kullaniciadi"] != "admin" && $_SESSION["kullanicisifresi"] != "12345")	
{	
echo "<br><hr><br>";
echo "Bu sayfaya giriş yapmadan erişemezsiniz.<br>";
 }
else
{
?> 
    <center>YAZI EKLEME MENÜSÜ</center>
    	<form action="eklesql.php" method="post" enctype="multipart/form-data"> <table>
      <tr><td>Yazı Başlığı:<input type="text" name="baslik" maxlength="30"/></td></tr>
      <tr><td>Tarih:<input type="date" name="tarih"/></td></tr>
	  <tr><td>Yazınız: (Max. 550 karakter)</td></tr><br>
      <tr><td><textarea rows="10" cols="50" maxlength="550" name="yazi"></textarea></td></tr>
      <tr><td>Resim Ekleyin:<input type="file" name="resim"></td></tr>
      <tr><td><input type="submit" value="Yayınla" name="yayinla">
      <input type="reset" value="Temizle" name="temizle"> </td></tr></table></form>
<?php } ?>