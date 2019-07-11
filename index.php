<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="Shortcut Icon"  href="imgs/logo.jpg"  type="image/x-icon">
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

<?php
include("baglanti.php"); error_reporting(0);
include("yazilarvesayfa.php");
?>
<div class="sagdiv">
YOKSA HALA ABONE DEĞİL MİSİNİZ? Abone olun;<br>
<script src="https://apis.google.com/js/platform.js"></script>
<div class="g-ytsubscribe" data-channelid="UCXUWzKZ8Z-J0Yt_sPO1TOMw" data-layout="default" data-count="default"></div>
<br><br>
Bir de bu videolarımıza göz atın;<br><br>
<?php  include("videolar.php");
echo $videolar[$sayilar[0]]."<br><br><br>";
echo $videolar[$sayilar[1]]."<br><br><br>";
echo $videolar[$sayilar[2]]."<br><br><br>";
echo $videolar[$sayilar[3]]."<br><br><br>";
echo $videolar[$sayilar[4]];
?> </div>

<div class="altdiv">GitHub demo site<p>
<a class="sollink" href="https://berkanaslan.com">berkanaslan.com</a> </div>
<a href="#"><div class="altreklam"></div></a>

</div> </body> </html>