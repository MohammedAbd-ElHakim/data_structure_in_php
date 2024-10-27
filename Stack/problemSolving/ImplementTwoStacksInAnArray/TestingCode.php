<?php
include_once 'Autoload.php';

$stack = new LinkedList(new Node());
$stack1 = new LinkedList(new Node());
$n = new Node(1);
$arr = [1, 2, 3, 4, 5, 6, 7];

echo "<br>arr : ";
echo "<pre>";
print_r($arr);
echo "</pre>";
ImplementTwoStacksInAnArray::createTwoStacks($arr, $stack, $stack1);

echo "<br>stack : ";
Displayer::display($stack);

echo "<br>stack1 : ";
Displayer::display($stack1);

?>