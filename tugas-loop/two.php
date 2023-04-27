<?php

$star = 10;

for ($a = 1; $a <= $star; $a++) {
    for ($b = $star; $b >= $a; $b -= 1) {
        echo "*";
    }
    echo "<br>";
}
