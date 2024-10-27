<?php
include_once 'Autoload.php';

$result = new LinkedList();
$numbers = [5, 1, 9, 2, 5, 1, 7];
echo "<br>numbers : ";
echo "<pre>";
print_r($numbers);
echo "</pre>";

FindNextSmallerOfNextGreaterInAnArray::start($numbers, $result);
echo "<br>result : ";
Displayer::display($result);
?>