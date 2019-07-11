<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ThetaBetaPlays</title>
<link href="stil/stil.css" rel="stylesheet" type="text/css"> </head>

<body> <div class="kapsayici"> 
<a href="index.php"><div class="ustdiv"></div></a>

<div class="soldivkapsayici">
<div class="soldiv"> <center> <table>
<tr><td><center><a class="sollink" href="index.php">Anasayfa</a></center></td></tr>
<tr><td></td></tr>
<tr><td><center><a class="sollink" href="bizkimiz.php">Biz Kimiz?</a></center></td></tr>
<tr><td></td></tr>
<tr><td><center><a class="sollink" target="_blank" href="https://www.twitch.tv/thetabetaplays">Twitch</a></center></td></tr>
<tr><td></td></tr>
<tr><td><center><a class="sollink" target="_blank" href="https://www.youtube.com/channel/UCXUWzKZ8Z-J0Yt_sPO1TOMw/">Youtube</a></center></td></tr> 
<tr><td></td></tr>
<tr><td><center><a class="sollink" target="_blank" href="https://twitter.com/Thetabetaplays">Twitter</a></center></td></tr>
<tr><td></td></tr>
<tr><td><center><a class="sollink" target="_blank" href="https://www.facebook.com/thetabetaplays0">Facebook</a></center></td></tr>
<tr><td></td></tr>
<tr><td><center><a class="sollink" target="_blank" href="https://www.facebook.com/groups/1453111744991413/">Facebook Grup</a></center></td></tr> 
<tr><td><center><a class="sollink" href="bmb.php">Bize mesaj bırak!</a></center></td></tr> 
</table> </center>
</div></div>

<div class="ortadiv">
<?php
include("baglanti.php"); error_reporting(0);

$as=$_POST["adsoyad"];
$ep=$_POST["eposta"];
$mesaj=$_POST["mesaj"];

$komut=mysql_query("insert into ziyaretcidefteri (no,adsoyad,mesaj,email) values ('','$as','$mesaj','$ep')");

if($komut){
echo "Bize mesaj bıraktığınız için teşekkür ederiz. <br> Mesajınız en kısa zamanda okunacak, gerek duyulursa geri dönüş yapılacaktır. :)<br>";
echo '<center><img src="imgs/zmk.jpg"/></center>';}
else {
echo "Kayıt eklenemedi...";
}
?> </div>

<div class="sagdiv">
YOKSA HALA ABONE DEĞİL MİSİNİZ? Abone olun;<br>
<script src="https://apis.google.com/js/platform.js"></script>
<div class="g-ytsubscribe" data-channelid="UCXUWzKZ8Z-J0Yt_sPO1TOMw" data-layout="default" data-count="default"></div>
<br><br>
Bir de bu videolarımıza göz atın;<br><br>
<?php  include("videolar.php");
echo $videolar[$sayilar[0]]."<br><br><br>";
echo $videolar[$sayilar[1]]."<br><br><br>";
?> </div>

<div class="altdiv">Bu site Theta ve Beta sever bir genç tarafından kodlanmıştır. :) Kendilerine, eğlenceli içerikler ürettikleri ve özellikle beni CS:GO ile tanıştırdıkları için böyle bir teşekkür etmek istedim. Umarım beğenirler. :) <br>
PRO BETA noob theta.
Rankım Güzide, rek için ekleyebilirsiniz.<p>
<a class="sollink" href="https://steamcommunity.com/id/aslanberr">Steam Hesabım</a> </div>
<a href="#"><div class="altreklam"></div></a>

</div> </body> </html>