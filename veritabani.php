<?php

$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$adres=$_POST['adres'];
$eposta=$_POST['eposta'];
$evno=$_POST['evno'];
$cep1=$_POST['cep1'];
$cep2=$_POST['cep2'];

if ($ad=="" || $soyad=="" || $adres=="" || $eposta=="" || $evno=="" || $cep1=="" || $cep2==""){
	echo "Lütfen Tüm Alanları Doldurunuz.";
	header( "refresh:3;url=index.php" );
	exit;
}



$baglan= mysqli_connect("localhost","root","","basvuru");

if (!$baglan) {
    echo "Hata: MySQL'e bağlanılamadı." . PHP_EOL;
    exit;
}

mysqli_set_charset($baglan,"utf8");


$sql="INSERT INTO kisibilgileri(AD,SOYAD,ADRES,EPOSTA,EVNO,CEP1,CEP2)
VALUES('" .$ad. "','" .$soyad. "','" .$adres. "','" .$eposta. "','" .$evno. "','" .$cep1. "','" .$cep2. "') ";



$sonuc= mysqli_query($baglan, $sql);

if(!$sonuc){
	 echo ("Hata:".$baglan->error);
	 exit;
} else {
	echo "<center>Kayıt başarıyla gerçekleşti.</center>";
	header( "refresh:3;url=index.php" );
}



?>

<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      *{
        font-size: 100;
        font-family: sans-serif;
        background: #d9d9d9;
      }
    </style>
  </head>
  <body>

  </body>
</html>
