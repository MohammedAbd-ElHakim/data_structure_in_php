<?php
include_once 'Autoload.php';

$result = new LinkedList();
$numbers = [1, 1, 2, 3, 4, 2, 1];
echo "<br>numbers : ";
echo "<pre>";
print_r($numbers);
echo "</pre>";

$finalResult = NextGreaterFrequencyElement::startNow($numbers, $result);
echo "<br>final : ";
echo "<pre>";
print_r($finalResult);
echo "</pre>";
?>