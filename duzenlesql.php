<head> <link href="stil/stil.css" rel="stylesheet" type="text/css"> </head>

<?php include("panel.php"); include("baglanti.php"); error_reporting(0);


$tablo="anasayfa";
$yazino=$_POST["yazino"];
$baslik=$_POST["baslik"];
$yazi=$_POST["yazi"];
$tarih=$_POST["tarih"];
$resim = $_FILES['resim']['tmp_name'];
copy($resim, 'imgs/'.$_FILES['resim']['name']);
$resimoutput = $_FILES['resim']['name'];

if(isset($resimoutput))
{
$komut=mysql_query("update $tablo set  baslik='$baslik', yazi='$yazi', resim='ryok.png', tarih='$tarih' where no=$yazino");

if($komut){
echo "Yazı düzenlendi.<br>";
echo "Geri dönmek için "."<a class='sollink' href='duzenle.php'>Tıklayın</a>"." ya da; <br>";
echo "Görüntülemek için "."<a class='sollink' href='index.php'>Tıklayın</a>";
}
else {
echo "Yazı düzenlenemedi...";
}}
else {
	$komut=mysql_query("update $tablo set  baslik='$baslik', yazi='$yazi', resim='$resimoutput', tarih='$tarih' where no=$yazino");

if($komut){
echo "Yazı düzenlendi.<br>";
echo "Geri dönmek için "."<a class='sollink' href='duzenle.php'>Tıklayın</a>"." ya da; <br>";
echo "Görüntülemek için "."<a class='sollink' href='index.php'>Tıklayın</a>";
}
else {
echo "Yazı düzenlenemedi...";
}}