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
    <center>YAZI SİLME MENÜSÜ</center><br>
    Silmek istediğiniz postun <b>no</b>'sunu aşağıya giriniz. PAYLAŞTIĞINIZ BÜTÜN YAZILARIN <b>NO</b>'LARI AŞAĞIDA VERİLMİŞTİR.
    	<form action="silsql.php" method="post" enctype="multipart/form-data"> <table>
      <tr><td>Yazı No:<input type="text" name="yazino" maxlength="3"/></td></tr>
      <tr><td><input type="submit" value="Sil" name="sil">
      <input type="reset" value="Temizle" name="temizle"> </td></tr></table></form>
      <hr> 
     	
<?php
	$tablo="anasayfa";
		$komut=mysql_query("select * from $tablo");
		while($oku=mysql_fetch_array($komut)) 
			{
			echo "Yazı (Post) No: <font color='#CCFF99'><b> ".$oku["no"]."</b></font><br>";	
			echo "Yazı (Post) Başlığı: <font color='#FF6633'> ".$oku["baslik"]."</font><br>";
			echo "<hr>";		
			}
 } ?>
