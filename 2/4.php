<?php

function psgpjg($pjg, $lbr)
{
  $luas = $pjg * $lbr;
  return $luas;
}


$bil1 = 5;
$bil2 = 15;
echo "Luas Persegi panjang dengan panjang $bil1 & lebar $bil2 = ";
$luas = psgpjg($bil1, $bil2);
echo " $luas<br />";
