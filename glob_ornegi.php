<h1>Glob Örneği</h1>

<a href="ataturk.jpg" target="_blank">
  <img src="ataturk.jpg" height='75' width='75'>
</a>


<?php

function DD($diziadi){ // Dump Data
  echo "<pre>";
  print_r($diziadi);
  echo "</pre>";
}

## Adım 1
echo "<h1>Adım 1</h1><hr>";
$dosyalar = array("1.php",  "deneme.txt", "abc.html");
DD($dosyalar); // diziyi ekrana yazar
echo $dosyalar[2]; // ABC.HTML yazar

## Adım 2
echo "<h1>Adım 2</h1><hr>";
$Liste = glob("*.php");
DD($Liste);

## Adım 3
echo "<h1>LYK'daki resim dosyaları</h1><hr>";
$Liste = glob("../lyk2018php/*.jpg");
foreach ($Liste as $Dosya) {
  echo "<a href='$Dosya' target='_blank'><img src='$Dosya' height='75' width='75'></a>\n";
}



echo "<h1>MEZUNİYET Albümü</h1><hr>";
$Liste = glob("resimler-mezuniyet/*.*");
foreach ($Liste as $Dosya) {
  echo "<a href='$Dosya' target='_blank'><img src='$Dosya' height='75' width='75'></a>\n";
}

echo "<h1>LYK KATILIMCILARI Albümü</h1><hr>";
$Liste = glob("resimler-lyk/*.*");
foreach ($Liste as $Dosya) {
  echo "<a href='$Dosya' target='_blank'><img src='$Dosya' height='75' width='75'></a>\n";
}

echo "<h1>PHP SINIFI Albümü</h1><hr>";
$Liste = glob("resimler-php/*.*");
foreach ($Liste as $Dosya) {
  echo "<a href='$Dosya' target='_blank'><img src='$Dosya' height='75' width='75'></a>\n";
}



?>












<hr>
