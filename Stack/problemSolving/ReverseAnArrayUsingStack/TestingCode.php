<?php
include_once 'Autoload.php';

$result = new LinkedList(new Node());
$arr = ['1', '2', '3', '4', '5'];

echo "<br>before reverse : ";
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<br>after reverse : ";
$reverseArr = ReverseAnArrayUsingStack::startReverse($arr, $result);
Displayer::display($reverseArr);
?>