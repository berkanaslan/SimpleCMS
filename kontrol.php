<head> <link href="stil/stil.css" rel="stylesheet" type="text/css"> </head>

<?php include("baglanti.php"); error_reporting(0);

session_start();
	
if (empty($_SESSION["kullaniciadi"]) && empty($_SESSION["kullanicisifresi"]))
{ echo	"Kullanıcı Adı ve Şifre boş geçilemez."."<br>";
  echo  "Tekrardan giriş sayfasına yönlendiriliyorsunuz.";
  header ('refresh:2; url=panel.php');	}

if (!empty($_SESSION["kullaniciadi"]) && empty($_SESSION["kullanicisifresi"]))
{ echo	"Şifre boş geçilemez."."<br>"; 
  echo  "Tekrardan giriş sayfasına yönlendiriliyorsunuz.";
  header ('refresh:2; url=panel.php');	}

if (empty($_SESSION["kullaniciadi"]) && !empty($_SESSION["kullanicisifresi"]))
{ echo	"Kullanıcı adı boş geçilemez."."<br>";
  echo  "Tekrardan giriş sayfasına yönlendiriliyorsunuz.";
  header ('refresh:2; url=panel.php');	}

if (!empty($_SESSION["kullaniciadi"]) && !empty($_SESSION["kullanicisifresi"]))
{
if($_SESSION["kullaniciadi"] != "admin" && $_SESSION["kullanicisifresi"] != "12345")
{ echo	"Kullanıcı adı ve Şifre hatalı girildi."."<br>";
  echo  "Tekrardan giriş sayfasına yönlendiriliyorsunuz.";
  header ('refresh:2; url=panel.php');	}
  
  if($_SESSION["kullaniciadi"] == "admin" && $_SESSION["kullanicisifresi"] != "12345")
{ echo	"Şifre hatalı girildi."."<br>";
  echo  "Tekrardan giriş sayfasına yönlendiriliyorsunuz.";
  header ('refresh:2; url=panel.php');	}
  
  if($_SESSION["kullaniciadi"] != "admin" && $_SESSION["kullanicisifresi"] == "12345")
{ echo	"Kullanıcı adı hatalı girildi."."<br>";
  echo  "Tekrardan giriş sayfasına yönlendiriliyorsunuz.";
  header ('refresh:2; url=panel.php');	}
}

if($_SESSION["kullaniciadi"] == "admin" && $_SESSION["kullanicisifresi"] == "12345")	
{
echo "Hoşgeldin  "."<b>"."<font color='#e9c684'>".$_SESSION["kullaniciadi"]."<br>"."</b>"."</font>";
echo "Birazdan Admin Paneline yönlendirileceksiniz."."<br>".
"<br>"."Tarayıcınız yönlendirme desteklemiyorsa " ?><a class="sollink" href="panel.php">Tıklayın.</a><?php
header ('refresh:2; url=panel.php');
}

?>