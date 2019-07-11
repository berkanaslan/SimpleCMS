<head> <link href="stil/stil.css" rel="stylesheet" type="text/css"> </head>

<?php include("panel.php"); include("baglanti.php"); error_reporting(0);


$tablo="anasayfa";
$yazino=$_POST["yazino"];


$komut = mysql_query("delete from $tablo where no=$yazino");

if($komut){
echo "Yazi silindi.<br>";
echo "Geri dönmek için "."<a class='sollink' href='sil.php'>Tıklayın</a>"." ya da; <br>";
echo "Panele dönmek için "."<a class='sollink' href='panel.php'>Tıklayın</a>";
}
else {
echo "Kayıt silinemedi...";
}