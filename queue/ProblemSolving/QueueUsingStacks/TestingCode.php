<?php
include_once './AutoLoaded.php';


$Queue = Factory::createNewObject('LinkedListQueue');
$stack = Factory::createNewObject('stack');
$tempStack = Factory::createNewObject('stack');


Push::push($stack, new Node(1));
Push::push($stack, new Node(2));
Push::push($stack, new Node(3));
Push::push($stack, new Node(4));
Push::push($stack, new Node(5));

echo "<br> stack : ";
Displayer::Display($stack);

echo "<br> Queue before : ";
DisplayerQueue::display($Queue);

echo "<br> Queue after fill it : ";
QueueUsingStacks::createQueue($Queue, $stack, $tempStack);
DisplayerQueue::display($Queue);
?>