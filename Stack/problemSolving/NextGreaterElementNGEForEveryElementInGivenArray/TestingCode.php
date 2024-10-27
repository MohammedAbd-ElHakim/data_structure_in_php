<?php
include_once 'Autoload.php';

$result = new LinkedList();
$numbers = [13, 7, 6, 12];
echo "<br>numbers : ";
echo "<pre>";
print_r($numbers);
echo "</pre>";

NextGreaterElementNGEForEveryElementInGivenArray::start($numbers, $result);
echo "<br>result : ";
Displayer::display($result);
?>