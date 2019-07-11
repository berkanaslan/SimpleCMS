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
    <center>YAZI DÜZENLEME MENÜSÜ</center><br>
    Düzenlemek istediğiniz postun <b>no</b>'sunu aşağıya giriniz. PAYLAŞTIĞINIZ BÜTÜN YAZILARIN <b>NO</b>'LARI AŞAĞIDA VERİLMİŞTİR.
    	<form action="duzenlesql.php" method="post" enctype="multipart/form-data"> <table>
      <tr><td>Düzenlenecek Yazı No:<input type="text" name="yazino" maxlength="4"/></td></tr>
      <tr><td>Yazının Yeni Başlığı:<input type="text" name="baslik" maxlength="30"/></td></tr>
      <tr><td>Yeni Tarih:<input type="date" name="tarih"/></td></tr>
	  <tr><td>Yeni Yazınız: (Max. 750 karakter)</td></tr><br>
      <tr><td><textarea rows="10" cols="50" maxlength="750" name="yazi"></textarea></td></tr>
      <tr><td>Yeni Resim Ekleyin (Boş geçilirse eskisini siler.)<input type="file" name="resim"></td></tr>
      <tr><td><input type="submit" value="Yayınla" name="yayinla">
      <input type="reset" value="Temizle" name="temizle"> </td></tr></table></form>
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