<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php
$host="sql208.byethost18.com";
$kadi="b18_20292956";
$sifre="s6gw7thk";
$veritabani="b18_20292956_tbp";

$baglanti=mysql_connect($host,$kadi,$sifre);
if($baglanti)
{
/*echo "MySQL sunucu ile bağlantı kuruldu"."<br>";*/
}

else
{
echo "MySQL sunucu ile bağlantı kurulamadi. Hata kodu :".mysql_error();
}
  @mysql_select_db($veritabani,$baglanti)
or die ("Veri tabanına bağlanamadık");

?></head></html>