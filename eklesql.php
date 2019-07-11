<head> <link href="stil/stil.css" rel="stylesheet" type="text/css"> </head>

<?php include("panel.php"); include("baglanti.php"); error_reporting(0);


$tablo="anasayfa";
$baslik=$_POST["baslik"];
$yazi=$_POST["yazi"];
$resim = $_FILES['resim']['tmp_name'];
$tarih=$_POST['tarih'];
copy($resim, 'imgs/'.$_FILES['resim']['name']);
$resimoutput = $_FILES['resim']['name'];

if(isset($resimoutput))
{
	$komut=mysql_query("insert into anasayfa (no,baslik,yazi,resim,tarih) values ('','$baslik','$yazi','ryok.png','$tarih')");	
if($komut){
echo "Kayıt eklendi.<br>";
echo "Geri dönmek için "."<a class='sollink' href='ekle.php'>Tıklayın</a>"." ya da; <br>";
echo "Görüntülemek için "."<a class='sollink' href='index.php'>Tıklayın</a>";
}
else {
echo "Kayıt eklenemedi...";}

}
else
{
$komut=mysql_query("insert into anasayfa (no,baslik,yazi,resim,tarih) values ('','$baslik','$yazi','$resimoutput','$tarih')");

if($komut){
echo "Kayıt eklendi.<br>";
echo "Geri dönmek için "."<a class='sollink' href='ekle.php'>Tıklayın</a>"." ya da; <br>";
echo "Görüntülemek için "."<a class='sollink' href='index.php'>Tıklayın</a>";
}
else {
echo "Kayıt eklenemedi...";
}}