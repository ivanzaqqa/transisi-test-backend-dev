<?php
$array = [
    ['f', 'g', 'h', 'i'],
    ['j', 'k', 'p', 'q'],
    ['r', 's', 't', 'u']
];

$cari = ['fghi', 'fghp'];

function cari($array, $cari): bool
{
    foreach ($array as $arr) {
        if ($arr == $cari) {
            return true;
        }
    }
    return false;
}

echo cari($array, $cari);
