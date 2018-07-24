<?php

  require_once("kutuphane.php");

  // KAYNAK : http://www.kevser.org/sozlukler/isimler-sozlugu
  $DosyaIcerigi = file_get_contents("isimler.txt");

  $Satirlar = explode("\n", $DosyaIcerigi);

  $Anlamlar = array(); // Boş bir dizi hazırla
  $Cinsiyetler = array(); // Boş bir dizi hazırla
  foreach ($Satirlar as $satir) {
    list($isim, $anlami, $cinsiyet) = isimBol($satir);
    if($cinsiyet != "") {
      $Anlamlar[$isim] = $anlami;
      $Cinsiyetler[$isim] = $cinsiyet;
    }
  }

  DD($Cinsiyetler);
  // DD($Anlamlar);

  IsimKarti($Satirlar[27]);
  IsimKarti($Satirlar[4796]);
  IsimKarti($Satirlar[4822]);
  IsimKarti($Satirlar[6157]);
  IsimKarti($Satirlar[4868]);



  echo "Bitti..";


?>
