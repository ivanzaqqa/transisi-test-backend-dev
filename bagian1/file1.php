<?php

$nilai = array(72, 65, 73, 78, 75, 74, 90, 81, 87, 65, 55, 69, 72, 78, 79, 91, 100, 40, 67, 77, 86);

// Nilai Rata-Rata
$average = ceil(array_sum($nilai) / count($nilai));

echo "Nilai rata-rata = " . $average . "\n";

// 7 Nilai Tertinggi
echo "Nilai 7 Tertinggi = ";
rsort($nilai);
$topseven = 7;
for ($x = 0; $x < $topseven; $x++) {
    echo $nilai[$x] . ",";
}

echo "\n";

// 7 Nilai terendah
echo "Nilai 7 Terendah = ";
sort($nilai);
$bottomseven = 7;
for ($x = 0; $x < $bottomseven; $x++) {
    echo $nilai[$x] . ",";
}
