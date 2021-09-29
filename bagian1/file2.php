<?php
function CountLowercase($str)
{
    $lower = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if (
            $str[$i] >= 'a' &&
            $str[$i] <= 'z'
        )
            $lower++;
    }
    echo '"TranSISI" mengandung ', $lower, ' buah huruf kecil';
}

$str = "TranSISI";
CountLowercase($str);
