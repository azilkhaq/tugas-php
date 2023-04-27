<?php
//Menghitung luas persegi
$sisi = 5;
$luasPersegi = $sisi ** 2;
echo "Luas persegi adalah: ".$luasPersegi."<br>";

//Menghitung luas persegi panjang
$panjang = 8;
$lebar = 4;
$luasPersegiPanjang = $panjang * $lebar;
echo "Luas persegi panjang adalah: ".$luasPersegiPanjang."<br>";

//Menghitung luas segitiga
$alas = 6;
$tinggi = 10;
$luasSegitiga = ($alas * $tinggi) / 2;
echo "Luas segitiga adalah: ".$luasSegitiga."<br>";

//Menghitung luas lingkaran
$jariJari = 3;
$phi = 3.14159;
$luasLingkaran = $phi * ($jariJari ** 2);
echo "Luas lingkaran adalah: ".$luasLingkaran."<br>";

//Menghitung luas trapesium
$sisiAtas = 5;
$sisiBawah = 9;
$tinggi = 7;
$luasTrapesium = (($sisiAtas + $sisiBawah) / 2) * $tinggi;
echo "Luas trapesium adalah: ".$luasTrapesium."<br>";