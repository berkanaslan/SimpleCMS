<head> <link rel="Shortcut Icon"  href="imgs/logo.jpg"  type="image/x-icon"> <link href="stil/stil.css" rel="stylesheet" type="text/css"></head>

<?php include("baglanti.php");
echo '<div class="ortadiv">';
$sayfada = 4; //Her sayfada gösterilecek post sayısı.
 
$sorgu = mysql_query('SELECT COUNT(*) AS toplam FROM anasayfa'); //Toplam post sayısı bulma.
$sonuc = mysql_fetch_assoc($sorgu);
$toplam_icerik = $sonuc['toplam'];

$toplam_sayfa = ceil($toplam_icerik / $sayfada); //Kaç sayfa oluşturulmasını hesaplıyor.
 
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
 
if($sayfa < 1) $sayfa = 1; //1'den küçük ise tek sayfa oluşturacak. 
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
 
$limit = ($sayfa - 1) * $sayfada;
$sorgu = mysql_query('SELECT * FROM anasayfa  order by  no desc LIMIT ' . $limit . ', ' . $sayfada); //Çekme işlemi
 
while($icerik = mysql_fetch_assoc($sorgu))
{
   	echo "<center><font class='baslik'>".$icerik['baslik']."</font></center>"; ?>
    
	<div class="yazidiv"><font size="-1" color="#FFCCFF"><?php echo $icerik['tarih']."<br></font>";
	echo $icerik['yazi'];?></div>
	<div class="resimdiv"><img src="imgs/<?php echo $icerik['resim'];?>"/></div><br>
    <center><img src="imgs/yatay.png"/></center> <?php
}
echo '<div class="sayfadiv">';
for($s = 1; $s <= $toplam_sayfa; $s++) {
   if($sayfa == $s) { // Eğer bulunduğumuz sayfa ise link yapma.
   } else {       
$sayfa_goster = 11; // gösterilecek sayfa sayısı
 
$en_az_orta = ceil($sayfa_goster/2);
$en_fazla_orta = ($toplam_sayfa+1) - $en_az_orta;
 
$sayfa_orta = $sayfa;
if($sayfa_orta < $en_az_orta) $sayfa_orta = $en_az_orta;
if($sayfa_orta > $en_fazla_orta) $sayfa_orta = $en_fazla_orta;
 
$sol_sayfalar = round($sayfa_orta - (($sayfa_goster-1) / 2));
$sag_sayfalar = round((($sayfa_goster-1) / 2) + $sayfa_orta); 
 
if($sol_sayfalar < 1) $sol_sayfalar = 1;
if($sag_sayfalar > $toplam_sayfa) $sag_sayfalar = $toplam_sayfa;

echo ' <a class="sayfalink" href="index.php?sayfa=1">&lt; İlkSayfa</a> ';
if($sayfa != 1) echo ' <a class="sayfalink"href="index.php?sayfa='.($sayfa-1).'">&lt;Önceki</a> ';

for($s = $sol_sayfalar; $s <= $sag_sayfalar; $s++) {
    if($sayfa == $s) {
        echo '[' . $s . '] ';
    } else {
        echo '<a class="sayfalink" href="index.php?sayfa='.$s.'">'.$s.'</a> ';
    }
}
if($sayfa != $toplam_sayfa) echo ' <a class="sayfalink" href="index.php?sayfa='.($sayfa+1).'">Sonraki&gt;</a> ';
echo ' <a class="sayfalink" href="index.php?sayfa='.$toplam_sayfa.'">SonSayfa &gt;</a></div>';

   }
}
echo '</div></div>';
?>