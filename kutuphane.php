<?php

function DD($diziadi){ // Dump Data
  echo "<pre>";
  print_r($diziadi);
  echo "</pre>";
} // DD

function isimBol($isim) {
  list($AD, $ANLAM1, $ANLAM2, $ANLAM3 ) = explode(":", $isim);
  $ANLAM = "$ANLAM1 $ANLAM2 $ANLAM3";
  $Erkek = strpos($ANLAM, " Er. ");
  $Kadin = strpos($ANLAM, " Ka. ");
  $Uniseks = strpos($ANLAM, "Erkek ve kadın adı olarak kullanılır");
  $Cinsiyet = "";
  if($Erkek > 0 and $Kadin == "") $Cinsiyet="Erkek";
  if($Erkek == "" and $Kadin > 0) $Cinsiyet="Kadın";
  if($Uniseks > 0) $Cinsiyet="Uniseks";

  return array($AD, $ANLAM, $Cinsiyet);

} // isimBol



  function IsimKarti($SATIR) {
    list($isim, $anlami, $cinsiyet) = isimBol($SATIR);
    if($cinsiyet != "") {
      echo "Ad: <b>$isim</b><br><br> ";
      echo "Anlam: $anlami<br><br>";
      echo "Kullanımı: $cinsiyet";
      echo "<hr>";
      SEOListesiYaz($isim);
      echo "<hr>";
    }
  } // IsimKarti


  function SEOListesiYaz($AD){
    $AD = " <b>$AD</b>";
    echo "<p style='font-size: 10px;'>";
    echo "$AD ne anlama geliyor?";
    echo "$AD ne demek?";
    echo "$AD isminin anlamı?";
    echo "$AD isminin anlamı nedir";
    echo "$AD kelimesinin anlamı nedir";
    echo "$AD nedir?";
    echo "$AD isminin manası nedir?";
    echo "$AD erkek ismi midir?";
    echo "$AD kadın ismi midir?";
    echo "$AD erkek adı midir?";
    echo "$AD kadın adı midir?";
    echo "</p>";

  } // SEOListesiYaz

 ?>
