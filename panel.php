<head> <link href="stil/stil.css" rel="stylesheet" type="text/css"> </head>

<?php 	include("baglanti.php"); error_reporting(0);

	
	session_start();	
if($_SESSION["kullaniciadi"] == "admin" && $_SESSION["kullanicisifresi"] == "12345")
	{echo "Hoşgeldiniz Sayın; "."<b>"."<font color='#e9c684'>".$_SESSION["kullaniciadi"]."<br>"."</b>"."</font>";
	echo "Oturumu sonlandırmak için "; ?>
 <a class="sollink" href="panel.php?cikis=1">Tıklayın<br></a> <?php	
	
	if ($_GET['cikis']==1) {
	session_destroy();	
	header ('location:panel.php'); }
	
	"<br><br><br><br><br><br><br>"; ?> <p><p><p>
    
  <table>
    <tr><td><a class="sollink" href="ekle.php">Yazı Ekle</a></td></tr>
    <tr><td><a class="sollink" href="sil.php">Yazı Sil</a></td></tr>
    <tr><td><a class="sollink" href="duzenle.php">Yazı Düzenle</a></td></tr>
    <tr><td><a class="sollink" href="zdmg.php">Ziyaretçi Yorumlarını Görüntüle</a></td></tr>
    <tr><td><a class="sollink" href="index.php">Anasayfaya Dön</a></td></tr>
  </table>
  	<br><hr><br>
	
	<?php }
	
	
else { ?>
<form name="kullanicigirisi" method="post" action=""><table>
&nbsp;Admin Paneline erişmek için giriş yapın ya da; <br>
Anasayfaya dönmek için <a class="sollink" href="index.php">Tıklayın</a><br>
&nbsp;<tr><td>Kullanıcı Adı:</td><td><input type="text" name="kadi"></td>
&nbsp;<tr><td>Şifre</td><td><input type="password" name="sifre"></td>
&nbsp;<tr><td><input type="reset" value="Temizle"></td><td><input type="submit" name="girisbuton" value="Giriş"></td><br>

</table></form> <?php } ?>

<?php
if(isset($_POST["girisbuton"]))
{
	session_start();
 
	$_SESSION["kullaniciadi"] = $_POST["kadi"];
	$_SESSION["kullanicisifresi"] = $_POST["sifre"];
	
	header('location: kontrol.php');	
}





?>