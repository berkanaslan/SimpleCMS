<head><link href="stil/stil.css" rel="stylesheet" type="text/css"></head>
<div class="ortadiv">	<div class="resimdiv"><img src="imgs/zd.png"/></div>


<?php

echo '<form action="zmk.php" method="post">'.'<table border="1">';

echo '<tr><td>'."Adınız ve Soyadınız:".'<input type="text" name="adsoyad"><br>';
echo '<tr><td>'."E-Posta Adresiniz:&nbsp;&nbsp;".'<input type="text" name="eposta"><br>'.'</tr></td>';
echo '<tr><td>'."Mesajınız: (Max. 300 karakter)<br>";
echo '<textarea rows="10" cols="75" name="mesaj"></textarea>'.'<br>'.'</tr></td>';
echo '<tr><td>'.'<input type="submit" value="Gönder">&nbsp;<input type="reset" value="Temizle">'.'</tr></td>';

echo '</form>'.'</table>';
?></div>