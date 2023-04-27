<?php

$nama = "Azil Khaq";
$tinggiBadan =  1.75; //satuan meter
$beratBadan = 65;

$bmi = $beratBadan / ($tinggiBadan ** 2);

$hasilBmi = "";

if ($bmi < 18.5) {
    $hasilBmi  = "Kurus";
} elseif ($bmi >= 18.5 && $bmi < 25) {
    $hasilBmi  = "Sedang";
} elseif ($bmi >= 25 && $bmi < 30) {
    $hasilBmi  = "Gemuk";
} else {
    $hasilBmi  = "Obesitas";
}

echo "Halo $nama. Nilai BMI anda adalah $bmi, anda termasuk ($hasilBmi)";