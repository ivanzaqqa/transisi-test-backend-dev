<?php
$string    = "TranSISI";
$upperCase = strtoupper($string);

$upperDiff = similar_text($string, $upperCase);
echo "TranSISI mengandung " . (strlen($string) - $upperDiff) . " buah huruf kecil."; // 6
