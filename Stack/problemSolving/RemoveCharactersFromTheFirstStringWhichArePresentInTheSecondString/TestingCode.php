<?php
include_once 'Autoload.php';

$result = new LinkedList(new Node());
$str = 'computer';
$str1 = 'cat';

echo "<br>str: " . $str;
echo "<br>str1: " . $str1;

echo "<br>after remove char: ";
$reverseArr = RemoveCharactersFromTheFirstStringWhichArePresentInTheSecondString::startRemove($str, $str1, $result);
Displayer::display($reverseArr);
?>