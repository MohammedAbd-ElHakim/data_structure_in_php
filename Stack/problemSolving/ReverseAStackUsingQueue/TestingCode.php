<?php
include_once 'Autoload.php';

$list = new LinkedList(new Node(4));
$q = new LinkedList(new Node());
$n = new Node(5);
pop::pop($q);
$stack = push::push($list, $n);
echo "<br>stack after add 2:";
Displayer::display($stack);

$stack1 = push::push($list, new Node(6));
echo "<br>stack after add 3:";
Displayer::display($stack1);

// $stack2 = push::push($list, new Node(30));
// echo "<br>stack after add 4:";
// Displayer::display($stack2);

// $stack3 = push::push($list, new Node(40));
// echo "<br>stack after add 5:";
// Displayer::display($stack3);

$l = ReverseAStackUsingQueue::startReverse($stack1, $q);
echo "<br>reverse stack by queue : ";
Displayer::display($l);

?>