<?php
include_once 'Autoload.php';

$arr = [1, 2, 1];

echo "<pre>";
print_r($arr);
echo "</pre>";

$theNumbersOfsubArrays = CountOfSubarraysWhoseFirstElementIsTheMinimum::startCount($arr);
echo "<br>theNumbersOfsubArrays : " . $theNumbersOfsubArrays;

?>