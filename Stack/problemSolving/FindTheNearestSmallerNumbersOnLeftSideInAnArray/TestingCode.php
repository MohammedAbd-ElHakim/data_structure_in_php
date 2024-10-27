<?php
include_once 'Autoload.php';

$result = new LinkedList();
$numbers = [1, 3, 0, 2, 5];
echo "<br>numbers : ";
echo "<pre>";
print_r($numbers);
echo "</pre>";

FindTheNearestSmallerNumbersOnLeftSideInAnArray::start($numbers, $result);
echo "<br>result : ";
Displayer::display($result);
?>