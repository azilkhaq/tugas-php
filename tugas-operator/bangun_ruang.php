<?php
//Menghitung volume kubus
$sisi = 5;
$volumeKubus = $sisi ** 3;
echo "Volume kubus adalah: ".$volumeKubus."<br>";

//Menghitung volume balok
$panjang = 8;
$lebar = 4;
$tinggi = 6;
$volumeBalok = $panjang * $lebar * $tinggi;
echo "Volume balok adalah: ".$volumeBalok."<br>";

//Menghitung volume tabung
$jariJari = 3;
$tinggi = 10;
$phi = 3.14159;
$volumeTabung = $phi * ($jariJari ** 2) * $tinggi;
echo "Volume tabung adalah: ".$volumeTabung."<br>";