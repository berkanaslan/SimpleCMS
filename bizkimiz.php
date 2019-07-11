<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ThetaBetaPlays</title>
<link rel="Shortcut Icon"  href="imgs/logo.jpg"  type="image/x-icon">
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
echo '<center>BİZ KİMİZ?<br>'.'<img src="imgs/mqdefault.jpg">'.'</center>';
?></div>
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

<div class="altdiv">GitHub demo site<p>
<a class="sollink" href="https://berkanaslan.com">berkanaslan.com</a> </div>
<a href="#"><div class="altreklam"></div></a>

</div> </body> </html>