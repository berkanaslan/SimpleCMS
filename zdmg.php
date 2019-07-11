<head> <link href="stil/stil.css" rel="stylesheet" type="text/css"> </head>

<?php include("panel.php"); include("baglanti.php"); error_reporting(0);

if($_SESSION["kullaniciadi"] != "admin" && $_SESSION["kullanicisifresi"] != "12345")	
{	
echo "<br><hr><br>";
echo "Bu sayfaya giriş yapmadan erişemezsiniz.<br>";
 }
else
{
	$tablo="ziyaretcidefteri";
		$komut=mysql_query("select * from $tablo order by no desc");
		while($oku=mysql_fetch_array($komut)) 
			{
			echo "Mesaj Yazan: <font color='#CCFF99'><b> ".$oku["adsoyad"]."</b></font><br>";
			echo "Yazan E-Posta: <font color='#FFFF66'><b> ".$oku["email"]."</b></font><br>";
			echo "Mesajı: <font color='#FF6633'> ".$oku["mesaj"]."</font><br>";
			echo "<hr>";		
			}

} ?>